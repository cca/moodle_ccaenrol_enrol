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

$plugin->version   = 2014042000;          		// YYYYMMDDHH (year, month, day, 24-hr time)
$plugin->requires  = 2013110500;        		// Requires this Moodle version
$plugin->component = 'enrol_ccaroles';  		// Full name of the plugin (used for diagnostics)
//$plugin->cron = 3600;							// Trigger every hour (3600 seconds in a hour)
