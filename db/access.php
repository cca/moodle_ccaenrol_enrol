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

$capabilities = array(
    'enrol/ccaroles:manage' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
        )
    ),

);
