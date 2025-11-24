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
 FILE:      RELEASE_PROCESS.md
 PATH:      /Reference/Governance/.md
 BRIEF:     Release workflow and versioning checklist
-->
# Release Process

## Branches
- `main`: Protected, stable releases only.
- `dev`: Active development.
- `feat/<scope>-<short>`: Feature branches.

## Steps
1. Bump version across headers/manifests/changelog.
2. Merge to `dev`; run tests.
3. Merge `dev` → `main` with a release commit.
4. Tag `vMAJOR.MINOR.PATCH`.
5. Build artifact zip + SHA256.
6. Draft GitHub Release with changelog notes.
