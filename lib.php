<?php
// (c) 2014 California College of the Arts, All Rights Reserved.

defined('MOODLE_INTERNAL') || die();

/**
 * The ccaroles enrolment plugin version specification.
 * This plugin synchronises enrolment and roles with CCA DataTel information..
 *
 * @package    enrol
 * @subpackage ccaroles
 * @copyright  2014 CCA
 * @license    No external license granted.
 */
class enrol_ccaroles_plugin extends enrol_plugin {
    /**
     * Is it possible to delete enrol instance via standard UI?
     *
     * @param object $instance
     * @return bool
     */
    public function instance_deleteable($instance) {
        if (!enrol_is_enabled('mitroles')) {
            return true;
        }
        if (!$this->get_config('dbtype') or !$this->get_config('dbhost') or !$this->get_config('remoteenroltable') or !$this->get_config('remotecoursefield') or !$this->get_config('remoteuserfield')) {
            return true;
        }

        //TODO: connect to external system and make sure no users are to be enrolled in this course
        return false;
    }

    /**
     * Forces synchronisation of user enrolments with external database,
     * does not create new courses.
     *
     * @param object $user user record
     * @return void
     */
    public function sync_user_enrolments($user) {
        global $CFG, $DB;

        // we do not create courses here intentionally because it requires full sync and is slow
        if (!$this->get_config('dbtype') or !$this->get_config('dbhost') or !$this->get_config('remoteenroltable') or !$this->get_config('remotecoursefield') or !$this->get_config('remoteuserfield')) {
            return;
        }

		//	Stubbed.
		return;
    }

    /**
     * Forces synchronisation of all enrolments with external database.
     *
     * @param bool $verbose
     * @return int 0 means success, 1 db connect failure, 2 db read failure
     */
    public function sync_enrolments($verbose = false) {
        global $CFG, $DB;

        // we do not create courses here intentionally because it requires full sync and is slow
        if (!$this->get_config('dbtype') or !$this->get_config('dbhost') or !$this->get_config('remoteenroltable') or !$this->get_config('remotecoursefield') or !$this->get_config('remoteuserfield')) {
            if ($verbose) {
                mtrace('User enrolment synchronisation skipped.');
            }
            return 0;
        }

        if ($verbose) {
            mtrace('Starting user enrolment synchronisation...');
        }

		//	Stubbed.
        return 0;
    }

    /**
     * Performs a full sync with external database.
     *
     * First it creates new courses if necessary, then
     * enrols and unenrols users.
     *
     * @param bool $verbose
     * @return int 0 means success, 1 db connect failure, 4 db read failure
     */
    public function sync_courses($verbose = false) {
        global $CFG, $DB;

        // make sure we sync either enrolments or courses
        if (!$this->get_config('dbtype') or !$this->get_config('dbhost') or !$this->get_config('newcoursetable') or !$this->get_config('newcoursefullname') or !$this->get_config('newcourseshortname')) {
            if ($verbose) {
                mtrace('Course synchronisation skipped.');
            }
            return 0;
        }

        if ($verbose) {
            mtrace('Starting course synchronisation...');
        }

		//	Stubbed.
        return 0;
    }

    /**
     * Tries to make connection to the external database.
     *
     * @return null|ADONewConnection
     */
    protected function db_init() {
        global $CFG;

		//	Probably not going to need this function.
		//	Stubbed.
        return;
    }

}

