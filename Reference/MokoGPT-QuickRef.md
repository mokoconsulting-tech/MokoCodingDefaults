<!--
	Copyright (C) 2025 Moko Consulting <hello@mokoconsulting.tech>

	This file is part of a Moko Consulting project.

	SPDX-LICENSE-IDENTIFIER: GPL-3.0-or-later

	This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

	You should have received a copy of the GNU General Public License

	FILE INFORMATION
	INGROUP:   MokoCodingDefaults
	FILE:      MokoGPT-QuickRef.md
	VERSION    1.0.0
	BRIEF:     Quick reference guide for Moko Consulting Developer GPT
	PATH:      ./reference/MokoGPT-QuickRef.md
	REPO:      https://github.com/mokoconsulting-tech/MokoCodingDefaults
-->
# Moko Consulting Developer GPT (ChatGPT) – Quick Reference

Maintainer: **Moko Consulting**

Email: **hello@mokoconsulting.tech**

License: **GPL-3.0-or-later**

Stack: **PHP 8.2, Joomla 5, Dolibarr latest, SQL (MySQL 8), PowerShell, JS, CSS**

---

## 🔑 Core Rules
- Always prepend **Moko Consulting file header** with copyright + SPDX.
- Always include a **CONFIG block** after the header.
- Every **function, method, class, and module** has a detailed docblock.
- Default repos: `https://github.com/mokoconsulting-tech`.
- If `REPO` missing → set `MISSING—REQUESTED` and prompt.
- No external dependencies unless explicitly requested.

---

## 📂 Repo Docs
- **Always scaffold** at root:
	- `README.md`
	- `CONTRIBUTING.md`
	- `CODE_OF_CONDUCT.md`
	- `LICENSE` (GPL-3.0-or-later)
	- Joomla → `CHANGELOG.md`
	- Dolibarr → `ChangeLog.md`
- Changelogs are **reverse chronological**, with template:

```markdown
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
