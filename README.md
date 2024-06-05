# Navbar Help Menu for Moodle

A plugin that adds a configurable help menu to Moodle's navigation bar.

## Requirements

This plugin requires Moodle 4.3+

## Installation

* Download/extract or clone https://github.com/ucsf-education/moodle-local_navbarhelpmenu to the `/local` directory in your Moodle installation.
* Rename the `local_navbarhelpmenu` directory to `navbarhelpmenu`.

## Usage & Settings

After installing the plugin, it does not do anything to Moodle yet.

To configure the plugin and its behaviour, please visit:
Site administration -> Appearance -> Navbar Helpmenu.

There, you find one setting:

### Menu items

With this setting, you can add items to help menu in the page header.

Each line consists of a link, a title, and a new window setting (optional) - separated by pipe characters. Each menu item needs to be written in a new line.

For example:

```
https://moodle.org|Moodle|true
/user/contactsitesupport.php|Site Support
```

Further information on the parameters:

* Link: The link target of the men item. It can be defined by a full web URL (e.g. https://moodle.org) or a relative path within your Moodle instance (e.g. /user/contactsitesupport.php).
* Title: This menu item title.
* New window (optional): By default, the link will be opened in the same window and the value of this setting is set to false. If you want to open the link in a new window set the value to true.

## Capabilities

This plugin does not add any additional capabilities.

## Theme support

This plugin is developed and tested on Moodle Core's Boost theme as well as UCSF's custom theme.

## Plugin repositories

The latest version can be found on GitHub:
https://github.com/ucsf-education/moodle-local_navbarhelpmenu


## Bug and problem reports / Support requests

Please report bugs and problems on GitHub:
https://github.com/ucsf-education/moodle-local_navbarhelpmenu/issues


## Feature proposals

Please issue feature proposals on GitHub:
https://github.com/ucsf-education/moodle-local_navbarhelpmenu/issues

Please create pull requests on GitHub:
https://github.com/ucsf-education/moodle-local_navbarhelpmenu/pulls

## Maintainers

The plugin is maintained by the Education IT department at UCSF.

## Copyright and License

This is Open Source Software, published under the GPL v3.

Copyright (c) The Regents of the University of California.