<!--
Copyright (C) 2025 Moko Consulting <hello@mokoconsulting.tech>
SPDX-License-Identifier: GPL-3.0-or-later
This file is part of a Moko Consulting project.

This program is free software; you can redistribute it and/or modify it under 
the terms of the GNU General Public License as published by the Free Software 
Foundation; either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
See the GNU General Public License for more details. 

You should have received a copy of the GNU General Public License along with this program. 
If not, see https://www.gnu.org/licenses/.

FILE INFORMATION 
 DEFGROUP:  MokoCodingDefaults
 REPO:      https://github.com/mokoconsulting-tech/MokoCodingDefaults
 VERSION:   2.0
 FILE:      CODING_STANDARDS.md
 PATH:      /Reference/Governance/CODING_STANDARDS.md
 BRIEF:     Universal coding standards for Moko Consulting projects
-->
# Moko Consulting — Universal Coding Standards

- License: GPL-3.0-or-later; include SPDX line
- Smart Header required in all files (JSON excluded)
- EOL: Unix **LF**; Encoding: **UTF-8 (no BOM)**
- `PATH:` is repo-root relative
- No duplicate `REPO:` lines; optional `NOTES:`/`VARIABLES:` omitted if unused
- No hard wraps (one sentence per line)

## FILE INFORMATION Order
1) DEFGROUP
2) INGROUP
3) REPO
4) VERSION
5) FILE
6) PATH
7) BRIEF
8) NOTES (optional)
9) VARIABLES (optional)

## Header Comment Fences by Language
- Canonical (HTML/MD/XML): `<!-- ... -->`
- PHP: `/* ... */`
- JS/TS/C/C++/Java/CSS: `/* ... */`
- Shell: `# ...`
- PowerShell: `<# ... #>`
- INI: `; ...`
- SQL: `-- ...`
