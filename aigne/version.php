<?php
/**
 * Theme version info
 *
 * @package    theme_aigne
 * @copyright  2013-2015 Franc Pombal (www.aigne.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

// Plugin version (update when tables change)
$plugin->version   = 2016050119;
// siguiente -> 2015120219

// This vesion of theme_aigne was tested on this Moodle version:
// 1.9.19 -> 2007101592
// 2.0.10 -> 2011033010
// 2.1.10 -> 2011070110
// 2.2.11 -> 2011120511
// 2.3.11 -> 2012062511
// 2.4.11 -> 2012120311
// 2.5.9  -> 2013051409 <-
// 2.6.11 -> 2013111811 <-
// 2.7.13 -> 2014051213 <-
// 2.8.11 -> 2014111011 <-
// 2.9.5  -> 2015051105 <-
// 3.0.3  -> 2015111603 <-

// Required Moodle version
$plugin->requires  = 2013051400;

// Full name of the plugin (used for diagnostics)
$plugin->component = 'theme_aigne';

// Theme based on...
// 1.9.x version -> N/A
// 2.0.x version -> 2011033000
// 2.5.x version -> 2013050100
$plugin->dependencies = array(
    'theme_base'  => 2013050100,
);

// Software maturity level
$plugin->maturity = MATURITY_STABLE;

// User-friendly version number
$plugin->release = '1.9.0';
// siguiente -> 1.9.1

//END OF FILE
