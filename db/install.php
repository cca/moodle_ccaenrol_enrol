<?php
// (c) 2014 California College of the Arts, All Rights Reserved.

/**
 * The ccaroles enrolment plugin version specification.
 * This plugin synchronises enrolment and roles with CCA DataTel information..
 *
 * @package    enrol
 * @subpackage ccaroles
 * @copyright  2014 CCA (Mark Norton)
 * @license    No external license granted.
 */

defined('MOODLE_INTERNAL') || die();

function xmldb_enrol_ccaroles_install() {
    global $CFG, $DB;

    //	Removed database config migration since it is not needed. - mjn 6/29/12

	// return true;
}
