<?php
<!--
 * Copyright (C) 2025 Moko Consulting <hello@mokoconsulting.tech>
 *
 * This file is part of a Moko Consulting project.
 *
 * SPDX-License-Identifier: GPL-3.0-or-later
 *
 * This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License, either version 3 of the License, or
 *  (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 *   along with this program. If not, see <https://www.gnu.org/licenses/>.
 -->

<!--FILE INFORMATION
 * INGROUP: 	com_example
 * FILE: 			${TM_FILENAME}
 * VERSION 	0.1.0
 * BRIEF: 		Skeleton placeholder
 *
 * PATH:			${RELATIVE_FILEPATH}
 *
 * NOTE:			Auto-generated Joomla component skeleton
-->
namespace Vendor\Component\Example\Administrator\Model;

use Joomla\CMS\MVC\Model\AdminModel;

class ItemModel extends AdminModel
{
    protected $text_prefix = 'COM_EXAMPLE';

    public function getTable($name = 'Item', $prefix = '', $options = [])
    {
        return new \Vendor\Component\Example\Administrator\Table\ItemTable($options);
    }

    public function getForm($data = [], $loadData = true)
    {
        // Form XML: administrator/components/com_example/forms/item.xml
        return false;
    }
}
