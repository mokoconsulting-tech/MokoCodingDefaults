<#
  Copyright (C) 2025 Jonathan Miller || Moko Consulting <hello@mokoconsulting.tech>

  This file is part of a Moko Consulting project.

  SPDX-LICENSE-IDENTIFIER: GPL-3.0-or-later

  This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

  You should have received a copy of the GNU General Public License

# FILE INFORMATION
  INGROUP:       GPT-Docs
  FILE:          package.ps1
  VERSION        1.0.1
  BRIEF:         Build a distributable ZIP of the reference pack (Windows/PowerShell)
  PATH:          tools/package.ps1
  REPO:          https://github.com/mokoconsulting-tech/MokoDevChatGpt
  NOTE:          Outputs dist/MokoGPT-Refs.zip
#>

<#!
.SYNOPSIS
  Package the MokoGPT reference files into a ZIP on Windows.

.DESCRIPTION
  Creates dist/MokoGPT-Refs.zip containing:
    - MokoGPT-QuickRef.md
    - MokoGPT-PocketRef.md
    - CHANGELOG.md
    - ChangeLog.md
    - LICENSE
    - README.md
    - release_draft.md

.PARAMETER OutputName
  Optional custom name for the zip file. Defaults to 'MokoGPT-Refs.zip'.

.EXAMPLE
  PS> .\tools\package.ps1

.EXAMPLE
  PS> .\tools\package.ps1 -OutputName MyRefs.zip

.NOTES
  Maintainer: Jonathan Miller || Moko Consulting <hello@mokoconsulting.tech>
#>

param(
  [Parameter(Mandatory = $false)]
  [ValidatePattern('^[\w\-. ]+\.zip$')]
  [string] $OutputName = 'MokoGPT-Refs.zip'
)

Set-StrictMode -Version Latest
$ErrorActionPreference = 'Stop'

# CONFIG: paths and file list
$RootDir = Split-Path -Parent $PSScriptRoot
$DistDir = Join-Path $RootDir 'dist'
$ZipPath = Join-Path $DistDir $OutputName
$Files   = @(
  'MokoGPT-QuickRef.md',
  'MokoGPT-PocketRef.md',
  'CHANGELOG.md',
  'ChangeLog.md',
  'LICENSE',
  'README.md',
  'release_draft.md'
)

# Ensure dist/ exists
if (-not (Test-Path -LiteralPath $DistDir)) {
  New-Item -ItemType Directory -Path $DistDir | Out-Null
}

# Remove existing zip if present
if (Test-Path -LiteralPath $ZipPath) {
  Remove-Item -LiteralPath $ZipPath -Force
}

# Resolve full file paths and validate existence
$Resolved = @()
foreach ($f in $Files) {
  $p = Join-Path $RootDir $f
  if (-not (Test-Path -LiteralPath $p)) {
    throw "Required file not found: $f (expected at $p)"
  }
  $Resolved += $p
}

function New-Zip([string]$Destination, [string[]]$Paths, [string]$BaseDir) {
  # Prefer Compress-Archive if available
  $compressArchive = Get-Command -Name Compress-Archive -ErrorAction SilentlyContinue
  if ($compressArchive) {
    Compress-Archive -Path $Paths -DestinationPath $Destination -Force
    return
  }

  # Fallback to .NET ZipArchive
  Add-Type -AssemblyName System.IO.Compression.FileSystem
  $zip = [System.IO.Compression.ZipFile]::Open($Destination, [System.IO.Compression.ZipArchiveMode]::Create)
  try {
    foreach ($path in $Paths) {
      $entryName = Resolve-Path -LiteralPath $path
      $entryName = $entryName.Path.Substring($BaseDir.Length).TrimStart('\','/')
      # Normalize to forward slashes in zip
      $entryName = $entryName -replace '\\','/'
      [System.IO.Compression.ZipFileExtensions]::CreateEntryFromFile($zip, $path, $entryName) | Out-Null
    }
  }
  finally {
    $zip.Dispose()
  }
}

New-Zip -Destination $ZipPath -Paths $Resolved -BaseDir $RootDir

Write-Host "OK: $ZipPath" -ForegroundColor Green
