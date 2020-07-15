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
 * Form to grant external users access to a BBB session
 *
 * @package    mod_bigbluebuttonbn
 * @author     Angela Baier
 * @copyright  2020 University of Vienna
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_bigbluebuttonbn\guestlink;

require_once($CFG->libdir.'/formslib.php');
require_once('locallib.php');

/**
 * Form to grant external users access to a BBB session
 *
 * @package    mod_bigbluebuttonbn
 * @author     Angela Baier
 * @copyright  2020 University of Vienna
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class guestlink_form extends \moodleform {

    /**
     * Form definition method.
     */
    public function definition() {
        //global $PAGE, $USER, $COURSE;

        //$gid = required_param('gid', PARAM_ALPHANUM); // This are required.

        //$bbbsession = bigbluebuttonbn_get_bbbsession_by_guestlinkid($gid);
        
        
        $mform = $this->_form;

//         $mform->addElement('hidden', 'gid', $gid);
//         $mform->setType('gid', PARAM_INT);

        $attributes = array('placeholder'=>get_string('guestlink_form_guestpass_info','bigbluebuttonbn'));
        $mform->addElement('text', 'guestpass', '', $attributes);
        $mform->setType('guestpass', PARAM_INT);

        $attributes = array('placeholder'=>get_string('guestlink_form_guestname_info','bigbluebuttonbn'));
        $mform->addElement('text', 'guestname', '', $attributes);
        $mform->setType('guestname', PARAM_RAW_TRIMMED);

        $joinbutton = $mform->createElement('submit','joinbutton', get_string('guestlink_form_join_button','bigbluebuttonbn'));
        $mform->addElement($joinbutton);
        //$this->add_action_buttons(false);
    }

}