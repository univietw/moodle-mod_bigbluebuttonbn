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
 * Page to grant external users access to a BBB session
 *
 * @package    mod_bigbluebuttonbn
 * @author     Angela Baier
 * @copyright  2020 University of Vienna
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require_once('lib.php');
require_once('locallib.php');

global $PAGE, $OUTPUT;

$PAGE->set_url(new moodle_url('/mod/bigbluebuttonbn/guestlink.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('embedded');
$gid = required_param('gid', PARAM_ALPHANUM); // This are required.

$bbbsession = bigbluebuttonbn_get_bbbsession_by_guestlinkid($gid);
$context = ['name'=>$bbbsession->name];
echo $OUTPUT->render_from_template('mod_bigbluebuttonbn/guestaccess_view', $context);

// $mform = new \mod_bigbluebuttonbn\guestlink\guestlink_form();
// $mform->display();

