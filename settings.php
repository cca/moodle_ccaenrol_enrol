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

/**
 * These settings came from the db plugin that comes with Moodle.  They may not be needed.
 */
/*	These are very unlikely to be needed. - mjn
if ($ADMIN->fulltree) {

    //--- general settings -----------------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('enrol_ccaroles_settings', '', get_string('pluginname_desc', 'enrol_ccaroles')));

    $settings->add(new admin_setting_heading('enrol_ccaroles_exdbheader', get_string('settingsheaderdb', 'enrol_ccaroles'), ''));

    $options = array('', "access","ado_access", "ado", "ado_mssql", "borland_ibase", "csv", "db2", "fbsql", "firebird", "ibase", "informix72", "informix", "mssql", "mssql_n", "mssqlnative", "mysql", "mysqli", "mysqlt", "oci805", "oci8", "oci8po", "odbc", "odbc_mssql", "odbc_oracle", "oracle", "postgres64", "postgres7", "postgres", "proxy", "sqlanywhere", "sybase", "vfp");
    $options = array_combine($options, $options);
    $settings->add(new admin_setting_configselect('enrol_ccaroles/dbtype', get_string('dbtype', 'enrol_ccaroles'), get_string('dbtype_desc', 'enrol_ccaroles'), '', $options));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/dbhost', get_string('dbhost', 'enrol_ccaroles'), get_string('dbhost_desc', 'enrol_ccaroles'), 'localhost'));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/dbuser', get_string('dbuser', 'enrol_ccaroles'), '', ''));

    $settings->add(new admin_setting_configpasswordunmask('enrol_ccaroles/dbpass', get_string('dbpass', 'enrol_ccaroles'), '', ''));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/dbname', get_string('dbname', 'enrol_ccaroles'), '', ''));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/dbencoding', get_string('dbencoding', 'enrol_ccaroles'), '', 'utf-8'));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/dbsetupsql', get_string('dbsetupsql', 'enrol_ccaroles'), get_string('dbsetupsql_desc', 'enrol_ccaroles'), ''));

    $settings->add(new admin_setting_configcheckbox('enrol_ccaroles/dbsybasequoting', get_string('dbsybasequoting', 'enrol_ccaroles'), get_string('dbsybasequoting_desc', 'enrol_ccaroles'), 0));

    $settings->add(new admin_setting_configcheckbox('enrol_ccaroles/debugdb', get_string('debugdb', 'enrol_ccaroles'), get_string('debugdb_desc', 'enrol_ccaroles'), 0));



    $settings->add(new admin_setting_heading('enrol_ccaroles_localheader', get_string('settingsheaderlocal', 'enrol_ccaroles'), ''));

    $options = array('id'=>'id', 'idnumber'=>'idnumber', 'shortname'=>'shortname');
    $settings->add(new admin_setting_configselect('enrol_ccaroles/localcoursefield', get_string('localcoursefield', 'enrol_ccaroles'), '', 'idnumber', $options));

    $options = array('id'=>'id', 'idnumber'=>'idnumber', 'email'=>'email', 'username'=>'username'); // only local users if username selected, no mnet users!
    $settings->add(new admin_setting_configselect('enrol_ccaroles/localuserfield', get_string('localuserfield', 'enrol_ccaroles'), '', 'idnumber', $options));

    $options = array('id'=>'id', 'shortname'=>'shortname', 'fullname'=>'fullname');
    $settings->add(new admin_setting_configselect('enrol_ccaroles/localrolefield', get_string('localrolefield', 'enrol_ccaroles'), '', 'shortname', $options));



    $settings->add(new admin_setting_heading('enrol_ccaroles_remoteheader', get_string('settingsheaderremote', 'enrol_ccaroles'), ''));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/remoteenroltable', get_string('remoteenroltable', 'enrol_ccaroles'), get_string('remoteenroltable_desc', 'enrol_ccaroles'), ''));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/remotecoursefield', get_string('remotecoursefield', 'enrol_ccaroles'), get_string('remotecoursefield_desc', 'enrol_ccaroles'), ''));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/remoteuserfield', get_string('remoteuserfield', 'enrol_ccaroles'), get_string('remoteuserfield_desc', 'enrol_ccaroles'), ''));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/remoterolefield', get_string('remoterolefield', 'enrol_ccaroles'), get_string('remoterolefield_desc', 'enrol_ccaroles'), ''));

    if (!during_initial_install()) {
        $options = get_default_enrol_roles(get_context_instance(CONTEXT_SYSTEM));
        $student = get_archetype_roles('student');
        $student = reset($student);
        $settings->add(new admin_setting_configselect('enrol_ccaroles/defaultrole', get_string('defaultrole', 'enrol_ccaroles'), get_string('defaultrole_desc', 'enrol_ccaroles'), $student->id, $options));
    }

    $settings->add(new admin_setting_configcheckbox('enrol_ccaroles/ignorehiddencourses', get_string('ignorehiddencourses', 'enrol_ccaroles'), get_string('ignorehiddencourses_desc', 'enrol_ccaroles'), 0));

    $options = array(ENROL_EXT_REMOVED_UNENROL        => get_string('extremovedunenrol', 'enrol'),
                     ENROL_EXT_REMOVED_KEEP           => get_string('extremovedkeep', 'enrol'),
                     ENROL_EXT_REMOVED_SUSPEND        => get_string('extremovedsuspend', 'enrol'),
                     ENROL_EXT_REMOVED_SUSPENDNOROLES => get_string('extremovedsuspendnoroles', 'enrol'));
    $settings->add(new admin_setting_configselect('enrol_ccaroles/unenrolaction', get_string('extremovedaction', 'enrol'), get_string('extremovedaction_help', 'enrol'), ENROL_EXT_REMOVED_UNENROL, $options));



    $settings->add(new admin_setting_heading('enrol_ccaroles_newcoursesheader', get_string('settingsheadernewcourses', 'enrol_ccaroles'), ''));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/newcoursetable', get_string('newcoursetable', 'enrol_ccaroles'), get_string('newcoursetable_desc', 'enrol_ccaroles'), ''));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/newcoursefullname', get_string('newcoursefullname', 'enrol_ccaroles'), '', 'fullname'));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/newcourseshortname', get_string('newcourseshortname', 'enrol_ccaroles'), '', 'shortname'));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/newcourseidnumber', get_string('newcourseidnumber', 'enrol_ccaroles'), '', 'idnumber'));

    $settings->add(new admin_setting_configtext('enrol_ccaroles/newcoursecategory', get_string('newcoursecategory', 'enrol_ccaroles'), '', ''));

    if (!during_initial_install()) {
        require_once($CFG->dirroot.'/course/lib.php');
        $options = array();
        $parentlist = array();
        make_categories_list($options, $parentlist);
        $settings->add(new admin_setting_configselect('enrol_ccaroles/defaultcategory', get_string('defaultcategory', 'enrol_ccaroles'), get_string('defaultcategory_desc', 'enrol_ccaroles'), 1, $options));
        unset($parentlist);
    }

    $settings->add(new admin_setting_configtext('enrol_ccaroles/templatecourse', get_string('templatecourse', 'enrol_ccaroles'), get_string('templatecourse_desc', 'enrol_ccaroles'), ''));
}
*/