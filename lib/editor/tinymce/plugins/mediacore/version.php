<?php
/**
 *       __  _____________   _______   __________  ____  ______
 *      /  |/  / ____/ __ \ /  _/   | / ____/ __ \/ __ \/ ____/
 *     / /|_/ / __/ / / / / / // /| |/ /   / / / / /_/ / __/
 *    / /  / / /___/ /_/ /_/ // ___ / /___/ /_/ / _, _/ /___
 *   /_/  /_/_____/_____//___/_/  |_\____/\____/_/ |_/_____/
 *
 * MediaCore filter
 *
 * @package    tinymce_mediacore
 * @subpackage tinymce
 * @copyright  2012 MediaCore Technologies
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

defined('MOODLE_INTERNAL') || die('Invalid access');

$plugin                     = new StdClass();
$plugin->component          = 'tinymce_mediacore';
$plugin->version            = 2013042900;
$plugin->requires           = 2011033007;
$plugin->release            = '2.0b';
$plugin->dependencies       = array('local_mediacore' => 2013031900);