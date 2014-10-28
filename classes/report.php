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
 * Core Report class of basic reporting plugin
 * @package   scormreport_myscormreport
 * @author    Ankit Kumar Agarwal
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace scormreport_myscormreport;
defined('MOODLE_INTERNAL') || die();

class report extends \mod_scorm\report {
    /**
     * displays the full report
     * @param \stdClass $scorm full SCORM object
     * @param \stdClass $cm - full course_module object
     * @param \stdClass $course - full course object
     * @param string $download - type of download being requested
     */
    function display($scorm, $cm, $course, $download) {
        echo "This is just a template of the scorm report.<br /> You should display 
                your actuall report instead of this content.<br />";
    }
}