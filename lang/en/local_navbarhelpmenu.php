<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local plugin "Navbar Help Menu" - Language pack.
 *
 * @package local_navbarhelpmenu
 * @copyright The Regents of the University of California
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Navbar Help Menu';
$string['pluginnamehelp'] = "A plugin that adds a configurable help menu to Moodle's navigation bar.";
$string['privacy:metadata'] = 'The Navbar help menu plugin does not store any personal data.';
$string['settingmenuitems'] = 'Menu items';
$string['settingmenuitemsdesc'] = 'With this setting, you can add items to help menu in the page header.<br/>
Each line consists of a link, a title, and a new window setting (optional) - separated by pipe characters. Each menu item needs to be written in a new line.<br/><br/>
For example:<br/>
<pre>
https://moodle.org|Moodle|true
/user/contactsitesupport.php|Site Support
</pre>
Further information on the parameters:
<ul>
<li><strong>Link:</strong> The link target of the men item. It can be defined by a full web URL (e.g. https://moodle.org) or a relative path within your Moodle instance (e.g. /user/contactsitesupport.php).</li>
<li><strong>Title:</strong> This menu item title.</li>
<li><strong>New window (optional)</strong>: By default, the link will be opened in the same window and the value of this setting is set to false. If you want to open the link in a new window set the value to true.</li>
</ul>';
$string['togglehelpmenu'] = 'Toggle help menu';
