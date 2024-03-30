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
 * Step definitions for local_navbarhelpmenu.
 *
 * @package   local_navbarhelpmenu
 * @category  test
 * @copyright The Regents of the University of California
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use Behat\Mink\Exception\ElementNotFoundException;
use Behat\Mink\Exception\ExpectationException;


/**
 * Step definitions for local_navbarhelpmenu.
 *
 * @package   local_navbarhelpmenu
 * @category  test
 * @copyright The Regents of the University of California
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class behat_local_navbarhelpmenu extends behat_base {

    /**
     * Asserts that the help menu is present in the nav bar.
     *
     * @Then /^I should see the help menu in the navbar$/
     */
    public function i_should_see_the_help_menu_in_the_navbar(): void {
        $xpath = '//div[@id="usernavigation"]';
        $xpath .= '/div[contains(@class, "local-navbarhelpmenu")]';

        $this->execute("behat_general::should_exist", [$xpath, "xpath_element"]);
    }

    /**
     * Asserts that the help menu is present in the nav bar.
     *
     * @Then /^I shouldn't see the help menu in the navbar$/
     */
    public function i_shouldnt_see_the_help_menu_in_the_navbar(): void {
        $xpath = '//div[@id="usernavigation"]';
        $xpath .= '/div[contains(@class, "local-navbarhelpmenu")]';

        $this->execute("behat_general::should_not_exist", [$xpath, "xpath_element"]);
    }

    /**
     * Asserts that the help menu items are not visible.
     *
     * @Then /^help menu items shouldn't be visible$/
     */
    public function help_menu_items_shouldnt_be_visible(): void {
        $xpath = '//div[@id="usernavigation"]';
        $xpath .= '/div[contains(@class, "local-navbarhelpmenu")]';
        $xpath .= '/div[contains(@class, "dropdown-menu")]';

        $this->execute("behat_general::should_not_be_visible", [$xpath, "xpath_element"]);
    }

    /**
     * Asserts that the help menu items are not visible.
     *
     * @Then /^help menu items should be visible$/
     */
    public function help_menu_items_should_be_visible(): void {
        $xpath = '//div[@id="usernavigation"]';
        $xpath .= '/div[contains(@class, "local-navbarhelpmenu")]';
        $xpath .= '/div[contains(@class, "dropdown-menu")]';

        $this->execute("behat_general::should_be_visible", [$xpath, "xpath_element"]);
    }

    /**
     * Clicks on the help menu toggle to expand or collapse the menu.
     *
     * @Given /^I click on the help menu toggle$/
     */
    public function i_click_on_the_help_menu_toggle(): void {
        $this->execute(
            'behat_general::i_click_on_in_the',
            ['.dropdown-toggle', 'css_element', '.local-navbarhelpmenu', 'css_element']
        );
    }

    /**
     * Asserts that the help menu contains a given number of items.
     *
     * @Then /^I should see "(?P<elements_number>\d+)" help menu items?$/
     *
     * @param string $expectedcount The expected number of help menu items.
     * @throws ExpectationException
     */
    public function i_should_see_x_help_menu_items(string $expectedcount): void {
        $xpath = '//div[@id="usernavigation"]';
        $xpath .= '/div[contains(@class, "local-navbarhelpmenu")]';
        $xpath .= '/div[contains(@class, "dropdown-menu")]';
        $xpath .= '/a[contains(@class, "dropdown-item")]';
        try {
            $elements = $this->find_all('xpath', $xpath);
        } catch (ElementNotFoundException) {
            $elements = [];
        }
        if (count($elements) !== (int) $expectedcount) {
            throw new ExpectationException("Found " . count($elements) .
                " menu items in navbar helpmenu. Expected $expectedcount.", $this->getSession()->getDriver());
        }
    }

    /**
     * Asserts that a help menu item in a given position has the given title and link,
     * with the link targeting this window.
     *
     * @Then /^I should see a help menu item with title "(?P<title>[^"]*)" linking to "(?P<link>[^"]*)" in this window$/
     *
     * @param string $title The menu item's title.
     * @param string $link The menu item's link.
     */
    public function i_should_see_help_menu_item_with_title_this_window(
        string $title,
        string $link
    ): void {
        $xpath = '//div[@id="usernavigation"]';
        $xpath .= '/div[contains(@class, "local-navbarhelpmenu")]';
        $xpath .= '/div[contains(@class, "dropdown-menu")]';
        $xpath .= "/a[contains(@class, 'dropdown-item') and text()='$title' and contains(@href, '$link')";
        $xpath .= ' and contains(@target, "_self")]';
        $this->execute("behat_general::should_exist", [$xpath, "xpath_element"]);
    }

    /**
     * Asserts that a help menu item in a given position has the given title and link,
     * with the link targeting a new window.
     *
     * @Then /^I should see a help menu item with title "(?P<title>[^"]*)" linking to "(?P<link>[^"]*)" in a new window$/
     *
     * @param string $title The menu item's title.
     * @param string $link The menu item's link.
     */
    public function i_should_see_help_menu_item_with_title_new_window(
        string $title,
        string $link
    ): void {
        $xpath = '//div[@id="usernavigation"]';
        $xpath .= '/div[contains(@class, "local-navbarhelpmenu")]';
        $xpath .= '/div[contains(@class, "dropdown-menu")]';
        $xpath .= "/a[contains(@class, 'dropdown-item') and text()='$title' and contains(@href, '$link')";
        $xpath .= ' and contains(@target, "_blank")]';
        $this->execute("behat_general::should_exist", [$xpath, "xpath_element"]);
    }
}
