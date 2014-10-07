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
 * Strings for component 'enrol_database', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   enrol_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

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


$string['dbencoding'] = 'Database encoding (CCA)';
$string['dbhost'] = 'Database host (CCA)';
$string['dbhost_desc'] = 'Type database server IP address or host name (CCA)';
$string['dbname'] = 'Database name (CCA)';
$string['dbpass'] = 'Database password (CCA)';
$string['dbsetupsql'] = 'Database setup command (CCA)';
$string['dbsetupsql_desc'] = '(CCA) SQL command for special database setup, often used to setup communication encoding - example for MySQL and PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Use sybase quotes (CCA)';
$string['dbsybasequoting_desc'] = 'Sybase style single quote escaping - needed for Oracle, MS SQL and some other databases. Do not use for MySQL! (CCA)';
$string['dbtype'] = 'Database driver (CCA)';
$string['dbtype_desc'] = 'ADOdb database driver name, type of the external database engine. (CCA)';
$string['dbuser'] = 'Database user (CCA)';
$string['debugdb'] = 'Debug ADOdb (CCA)';
$string['debugdb_desc'] = 'Debug ADOdb connection to external database - use when getting empty page during login. Not suitable for production sites! (CCA)';
$string['defaultcategory'] = 'Default new course category (CCA)';
$string['defaultcategory_desc'] = 'The default category for auto-created courses. Used when no new category id specified or not found. (CCA)';
$string['defaultrole'] = 'Default role (CCA)';
$string['defaultrole_desc'] = 'The role that will be assigned by default if no other role is specified in external table. (CCA)';
$string['ignorehiddencourses'] = 'Ignore hidden courses (CCA)';
$string['ignorehiddencourses_desc'] = 'If enabled users will not be enrolled on courses that are set to be unavailable to students. (CCA)';
$string['localcoursefield'] = 'Local course field (CCA)';
$string['localrolefield'] = 'Local role field (CCA)';
$string['localuserfield'] = 'Local user field (CCA)';
$string['newcoursetable'] = 'Remote new courses table (CCA)';
$string['newcoursetable_desc'] = 'Specify of the name of the table that contains list of courses that should be created automatically. Empty means no courses are created. (CCA)';
$string['newcoursecategory'] = 'New course category id field (CCA)';
$string['newcoursefullname'] = 'New course full name field (CCA)';
$string['newcourseidnumber'] = 'New course ID number field (CCA)';
$string['newcourseshortname'] = 'New course short name field (CCA)';
$string['pluginname'] = 'CCA Roles Synchronization';
$string['pluginname_desc'] = 'You can synch courses and enrolment permissions against the CCA Roles Service.';
$string['remotecoursefield'] = 'Remote course field (CCA)';
$string['remotecoursefield_desc'] = 'The name of the field in the remote table that we are using to match entries in the course table. (CCA)';
$string['remoteenroltable'] = 'Remote user enrolment table (CCA)';
$string['remoteenroltable_desc'] = 'Specify the name of the table that contains list of user enrolments. Empty means no user enrolment sync. (CCA)';
$string['remoterolefield'] = 'Remote role field (CCA)';
$string['remoterolefield_desc'] = 'The name of the field in the remote table that we are using to match entries in the roles table. (CCA)';
$string['remoteuserfield'] = 'Remote user field (CCA)';
$string['settingsheaderdb'] = 'External database connection (CCA)';
$string['settingsheaderlocal'] = 'Local field mapping (CCA)';
$string['settingsheaderremote'] = 'Remote enrolment sync (CCA)';
$string['settingsheadernewcourses'] = 'Creation of new courses (CCA)';
$string['remoteuserfield_desc'] = 'The name of the field in the remote table that we are using to match entries in the user table. (CCA)';
$string['templatecourse'] = 'New course template (CCA)';
$string['templatecourse_desc'] = 'Optional: auto-created courses can copy their settings from a template course. Type here the shortname of the template course. (CCA)';
