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
 * Plugin administration pages are defined here.
 *
 * @package     local_qbconfig
 * @category    admin
 * @copyright   2020 Marcus Green
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage(
    'local_qbconfig', get_string('pluginname', 'local_qbconfig')
    );
    if ($ADMIN->fulltree) {
        $settings->add(new admin_setting_configcheckbox('local_qbconfig/useeditor',
          get_string('useeditor', 'local_qbconfig'),
          get_string('useeditor_text', 'local_qbconfig'), 1));
        $settings->add(new admin_setting_configcheckbox('local_qbconfig/starthidden',
          get_string('starthidden', 'local_qbconfig'),
          get_string('starthidden_text', 'local_qbconfig'), 1));

        $problemheader = get_string('problem_with_question_header', 'local_qbconfig');
        $settings->add(new admin_setting_configtextarea('local_qbconfig/problemheader',
          get_string('header', 'local_qbconfig'),
          get_string('header_text', 'local_qbconfig'),
          get_string('problem_with_question_header', 'local_qbconfig'), PARAM_RAW, 100, 2), $problemheader);

        $problemheaderdetails = get_string('problem_with_question_header', 'local_qbconfig');
        $settings->add(new admin_setting_configtextarea('local_qbconfig/problemheaderdetails',
          get_string('details', 'local_qbconfig'),
          get_string('details_text', 'local_qbconfig'),
          get_string('problem_with_question_details', 'local_qbconfig'), PARAM_RAW, 100, 2), $problemheaderdetails);
    }
      $ADMIN->add('localplugins', $settings);

}
