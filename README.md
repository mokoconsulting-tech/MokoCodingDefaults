<!--
Copyright (C) 2025 Moko Consulting <hello@mokoconsulting.tech>
This file is part of a Moko Consulting project.
SPDX-License-Identifier: GPL-3.0-or-later

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see https://www.gnu.org/licenses/.

DEFGROUP: MokoCodingDefaults
INGROUP: Defaults & Governance
REPO: https://github.com/mokoconsulting-tech/MokoCodingDefaults
VERSION: Development
FILE: README.md
PATH: /README.md
BRIEF: Centralized coding defaults, scaffolds, and governance docs for Moko Consulting projects (Dolibarr, Joomla, WaaS, Scripts).
-->

# MokoCodingDefaults

Badges: [![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0) ![Status](https://img.shields.io/badge/status-active-brightgreen)

## Introduction

**MokoCodingDefaults** is the single source of truth for Moko Consulting's coding defaults, repo governance, and project scaffolding. It includes headers, templates, CI policies, contribution norms, and language/UX accessibility expectations used across Dolibarr, Joomla, and related projects.

> **Note:** This repository is intended to be referenced and reused across projects. Do not copy folder layouts here into downstream READMEs; keep structure details inside agent plans and contributor docs.

## Features

* Smart copyright header blocks with SPDX (`GPL-3.0-or-later`) and `REPO:` line
* Standardized CI/CD defaults and quality gates
* Editor & linting presets (EditorConfig, ESLint, Prettier, PHP-CS-Fixer)
* Issue/PR templates, labels, and release checklists
* Accessibility quick‑pass checklist (WCAG 2.1 AA)
* Security hygiene: CODEOWNERS, Dependabot, reserved secret prefixes
* **Dolibarr module numero registry** (see below)

## Install / Use

You can consume these defaults in any project via one (or more) of the following patterns:

1. **Submodule (recommended)**

   ```bash
   git submodule add https://github.com/mokoconsulting-tech/MokoCodingDefaults .moko/defaults
   git submodule update --init --recursive
   ```
2. **Remote‑include via CI** (pull into your pipeline before lint/test):

   ```bash
   curl -fsSL https://raw.githubusercontent.com/mokoconsulting-tech/MokoCodingDefaults/main/.editorconfig -o .editorconfig
   ```
3. **Scaffold** new projects using the overlays described below.

> Keep source of truth here; downstream repos may override with a project‑specific `.moko.local/` layer if needed.

## Configuration

* **EditorConfig / ESLint / Prettier / PHP-CS-Fixer**: adopt as‑is; adjust only in `.moko.local/` where strictly necessary.
* **Git**: protected `main`; Conventional Commits; squash merges; PRs require passing checks + 1 review.
* **Localization**: Provide en\_US and en\_GB strings for user‑facing text by default.

## Usage

* Include headers in all files (skip JSON).
* Sync `VERSION` with your project changelog on release.
* Add `REPO:` line once a repository URL is known.
* Apply accessibility checklist during PR review.

## Dolibarr Module Numero Registry

Reserved block for Moko Consulting modules: **185050–185099**.

| Numero | Module        | Notes               |
| -----: | ------------- | ------------------- |
| 185051 | MokoDoliTools | Reserved and in use |
| 185052 | MokoDoliSign  | Reserved and in use |

> **Rule:** Reserve a numero **before** coding a new Dolibarr module. Update this table and the standards document accordingly.

## Overlays & Scaffolds

* `dolibarr-default` — module skeleton, language keys, rights template, migrations (idempotent; `INSERT IGNORE` for `llx_const`).
* `joomla-template-default` — Cassiopeia‑based template scaffold with tokens and dark‑mode variables.
* `joomla-plugin-default` — plugin scaffold with manifest + language files.
* `generic-git` — baseline repo hygiene: issue/PR templates, labels, CI, security.

## Roadmap

* Expand Dolibarr migration helpers and QA smoke scripts
* Add Playwright visual‑regression harness examples
* Provide GitHub Actions matrices for PHP 8.1–8.3 and Node LTS

## Support

* Documentation & help desk: [https://mokoconsulting.tech/support/waas](https://mokoconsulting.tech/support/waas)
* Security: security reports via private contact in SECURITY.md
* General inquiries: [dev@mokoconsulting.tech](mailto:dev@mokoconsulting.tech)

## License

GPL-3.0-or-later. See `LICENSE`.
