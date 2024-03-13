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
 * Local plugin "Navbar Help Menu" - Library.
 *
 * @package local_navbarhelpmenu
 * @copyright The Regents of the University of California
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use local_navbarhelpmenu\output\helpmenu;

/**
 * Output callback for injecting our help menu into the nav bar.
 *
 * @link https://docs.moodle.org/dev/Output_callbacks#render_navbar_output
 * @param renderer_base $renderer
 * @return string
 * @throws coding_exception
 */
function local_navbarhelpmenu_render_navbar_output(renderer_base $renderer): string {
    return $renderer->render(new helpmenu());
}
