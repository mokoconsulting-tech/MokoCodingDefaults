<?php
/**
 Copyright (C) 2025 Moko Consulting <hello@mokoconsulting.tech>

 This file is part of a Moko Consulting project.

 SPDX-LICENSE-IDENTIFIER: GPL-3.0-or-later

 This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the IMPLIED WARRANTY of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

 You should have received a copy of the GNU General Public License (./LICENSE.md).

 # FILE INFORMATION
 DEFGROUP: <ProjectGroup>
 INGROUP: <Subgroup>
 REPO: <RepositoryURL>
 VERSION: <Version>
 PATH: <RelativePath>
 BRIEF: <ShortDescription>
 NOTE: <OptionalNotes>
*/
/**
 * Prepare admin pages header
 *
 * @return array<array{string,string,string}>
 */
function sampleAdminPrepareHead()
{
	global $langs, $conf;

	// global $db;
	// $extrafields = new ExtraFields($db);
	// $extrafields->fetch_name_optionals_label('myobject');

	$langs->load("sample@sample");

	$h = 0;
	$head = array();

	$head[$h][0] = dol_buildpath("/sample/admin/setup.php", 1);
	$head[$h][1] = $langs->trans("Settings");
	$head[$h][2] = 'settings';
	$h++;

	/*
	$head[$h][0] = dol_buildpath("/sample/admin/myobject_extrafields.php", 1);
	$head[$h][1] = $langs->trans("ExtraFields");
	$nbExtrafields = is_countable($extrafields->attributes['myobject']['label']) ? count($extrafields->attributes['myobject']['label']) : 0;
	if ($nbExtrafields > 0) {
		$head[$h][1] .= '<span class="badge marginleftonlyshort">' . $nbExtrafields . '</span>';
	}
	$head[$h][2] = 'myobject_extrafields';
	$h++;

	$head[$h][0] = dol_buildpath("/sample/admin/myobjectline_extrafields.php", 1);
	$head[$h][1] = $langs->trans("ExtraFieldsLines");
	$nbExtrafields = is_countable($extrafields->attributes['myobjectline']['label']) ? count($extrafields->attributes['myobject']['label']) : 0;
	if ($nbExtrafields > 0) {
		$head[$h][1] .= '<span class="badge marginleftonlyshort">' . $nbExtrafields . '</span>';
	}
	$head[$h][2] = 'myobject_extrafieldsline';
	$h++;
	*/

	$head[$h][0] = dol_buildpath("/sample/admin/about.php", 1);
	$head[$h][1] = $langs->trans("About");
	$head[$h][2] = 'about';
	$h++;

	// Show more tabs from modules
	// Entries must be declared in modules descriptor with line
	//$this->tabs = array(
	//	'entity:+tabname:Title:@sample:/sample/mypage.php?id=__ID__'
	//); // to add new tab
	//$this->tabs = array(
	//	'entity:-tabname:Title:@sample:/sample/mypage.php?id=__ID__'
	//); // to remove a tab
	complete_head_from_modules($conf, $langs, null, $head, $h, 'sample@sample');

	complete_head_from_modules($conf, $langs, null, $head, $h, 'sample@sample', 'remove');

	return $head;
}
