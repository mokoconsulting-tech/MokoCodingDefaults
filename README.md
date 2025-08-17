<!--
  Copyright (C) 2025 Jonathan Miller || Moko Consulting <hello@mokoconsulting.tech>

  This file is part of a Moko Consulting project.

  SPDX-LICENSE-IDENTIFIER: GPL-3.0-or-later

  This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

  You should have received a copy of the GNU General Public License

  FILE INFORMATION
  INGROUP:   GPT-Docs
  FILE:      README.md
  VERSION    1.0.0
  BRIEF:     Reference + packaging repo for Moko Consulting Developer GPT
  PATH:      README.md
  REPO:      https://github.com/mokoconsulting-tech/MokoDevChatGpt
  NOTE:      Documentation and tools for distribution; no runtime code.
-->

📘 Moko Consulting Developer GPT (ChatGPT) – README.md

Robotic, logical, systematic guidance and packaging for the private Moko Consulting Developer GPT.
Includes universal file headers, docblock standards, dual changelog conventions, and cross-platform packaging.

📂 Contents

MokoGPT-QuickRef.md — Full one-page quick reference (headers, CONFIG, docblock rules)

MokoGPT-PocketRef.md — Condensed pocket guide for fast lookup

CHANGELOG.md — General/Joomla-style changelog (reverse chronological)

ChangeLog.md — Dolibarr-style changelog (reverse chronological, capital “L”)

LICENSE — GPL-3.0-or-later

tools/package.sh — Linux/macOS packager

tools/package.ps1 — Windows PowerShell packager

.github/workflows/release.yml — GitHub Actions to package ZIP on tag push

release_draft.md — Paste-ready GitHub Release notes

🔑 Features

Universal headers with SPDX-LICENSE-IDENTIFIER: GPL-3.0-or-later

CONFIG sections after headers in generated files

Detailed docblocks for classes, functions, modules

Joomla 5 and Dolibarr latest conventions embedded

Dolibarr module IDs restricted to 185050–185099 (manual verification required)

Two changelog conventions maintained in parallel

No external dependencies unless explicitly requested

📎 Dolibarr IDs reference: Dolibarr Wiki

⚡ Quick Start

Clone or initialize this repo locally:

git clone https://github.com/mokoconsulting-tech/MokoDevChatGpt.git
cd MokoDevChatGpt


Export references to PDF (optional, requires pandoc):

pandoc MokoGPT-QuickRef.md  -o MokoGPT-QuickRef.pdf
pandoc MokoGPT-PocketRef.md -o MokoGPT-PocketRef.pdf

📦 Packaging (ZIP)

Linux/macOS

bash tools/package.sh
# Output: dist/MokoGPT-Refs.zip


Windows PowerShell

Set-ExecutionPolicy -Scope Process -ExecutionPolicy Bypass
.\tools\package.ps1
# Output: dist\MokoGPT-Refs.zip


GitHub Actions (CI)

git tag v1.0.1
git push origin v1.0.1

🆘 Help Shortcuts (inside GPT)

help → full usage guide

help joomla / help dolibarr / help sql / help php / help docs

help powershell / help js / help css

📝 Changelog Policy

Joomla/general: CHANGELOG.md

Dolibarr: ChangeLog.md

Ordering: newest first (reverse chronological).

Template (Keep a Changelog style):

## [X.Y.Z] - YYYY-MM-DD
### Added
- ...
### Changed
- ...
### Fixed
- ...
### Deprecated
- ...
### Removed
- ...
### Security
- ...

📌 Versioning

Semantic Versioning (SemVer)

Docs start at v1.0.0

Changelogs/releases may advance independently for packaging updates

⚖️ License

GPL-3.0-or-later. See LICENSE.

👤 Maintainer

Jonathan Miller || Moko Consulting
📧 hello@mokoconsulting.tech

⚙️ CONFIG
name: Moko Consulting Developer GPT
repo: https://github.com/mokoconsulting-tech/MokoDevChatGpt
license: GPL-3.0-or-later
docs:
  - MokoGPT-QuickRef.md
  - MokoGPT-PocketRef.md
changelogs:
  joomla: CHANGELOG.md
  dolibarr: ChangeLog.md
packaging:
  linux_macos: tools/package.sh
  windows: tools/package.ps1
ci:
  workflow: .github/workflows/release.yml
dolibarr:
  id_range: [185050, 185099]
  id_verification: manual