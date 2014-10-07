<?php
// (c) 2014 California College of the Arts, All Rights Reserved.

/**
 * CLI sync for full external CCA roles synchronisation.
 *
 * Sample cron entry:
 * # 5 minutes past 4am
 * 5 4 * * * $sudo -u www-data /usr/bin/php /var/www/moodle/enrol/Edite/cli/sync.php
 *
 * Notes:
 *   - it is required to use the web server account when executing PHP CLI scripts
 *   - you need to change the "www-data" to match the apache user account
 *   - use "su" if "sudo" not available
 *
 * @package    enrol
 * @subpackage ccaroles
 * @copyright  2014 CCA (Mark Norton)
 * @license    No external license granted.
 */

define('CLI_SCRIPT', true);

require(dirname(dirname(dirname(dirname(__FILE__)))).'/config.php');
require_once($CFG->libdir.'/clilib.php');

// now get cli options
list($options, $unrecognized) = cli_get_params(array('verbose'=>false, 'help'=>false), array('v'=>'verbose', 'h'=>'help'));

if ($unrecognized) {
    $unrecognized = implode("\n  ", $unrecognized);
    cli_error(get_string('cliunknowoption', 'admin', $unrecognized));
}

if ($options['help']) {
    $help =
"Execute enrol sync against CCA Data Services.
The enrol_ccaroles plugin must be enabled and properly configured.

Options:
-v, --verbose         Print verbose progess information
-h, --help            Print out this help

Example:
\$sudo -u www-data /usr/bin/php enrol/mitroles/cli/sync.php

Sample cron entry:
# 5 minutes past 4am
5 4 * * * \$sudo -u www-data /usr/bin/php /var/www/moodle/enrol/ccaroles/cli/sync.php
";

    echo $help;
    die;
}

if (!enrol_is_enabled('ccaroles')) {
    echo('enrol_ccaroles plugin is disabled, sync is disabled'."\n");
    exit(1);
}

$verbose = !empty($options['verbose']);
$enrol = enrol_get_plugin('ccaroles');
$result = 0;

$result = $result | $enrol->sync_courses($verbose);
$result = $result | $enrol->sync_enrolments($verbose);

exit($result);