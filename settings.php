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
 * @package   theme_boost
 * @copyright 2016 Ryan Wyllie
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $settings = new theme_boost_admin_settingspage_tabs('themesettingfakesmarts', get_string('configtitle', 'theme_fakesmarts'));
    $page = new admin_settingpage('theme_fakesmarts_general', get_string('generalsettings', 'theme_boost'));

    // Background image setting.
    $name = 'theme_fakesmarts/redirect_url';
    $title = get_string('redirect_url', 'theme_fakesmarts');
    $description = get_string('redirect_url_desc', 'theme_fakesmarts');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_fakesmarts/show_edit_mode';
    $title = get_string('show_edit_mode', 'theme_fakesmarts');
    $description = get_string('show_edit_mode_desc', 'theme_fakesmarts');
    $setting = new admin_setting_configcheckbox($name, $title, $description, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Must add the page after definiting all the settings!
    $settings->add($page);


}

