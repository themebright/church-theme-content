<?php/** * EDD License Handling * * Add-ons can register themselves in order to leverage Easy Digital Downloads Software Licensing features. * * See add-ons.php for the ctc_register_add_on() function. A registered add-on benefits from: * * 1. License Key field and ability to activate/deactivate buttons in Settings * 2. One-click updates via a store using Easy Digital Downloads Software Licensing * 3. Admin notice when add-on license is inactive, expiring soon or expired * * @package    Church_Theme_Content * @subpackage Admin * @copyright  Copyright (c) 2014, churchthemes.com * @link       https://github.com/churchthemes/church-theme-content * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html * @since      1.2 */// No direct accessif ( ! defined( 'ABSPATH' ) ) exit;/************************************************* * LICENSE SETTINGS *************************************************//** * Add license key fields to settings page * * A field for each registered add-on will be added to the settings page * * @since 1.2 * @param array $fields Settings fields in the section * @return array Modified setting fields with license key fields inserted */function ctc_add_license_settings( $fields ) {	$fields = array();	$fields['first_setting'] = array(		'name'				=> __( 'First Setting', 'church-theme-content' ),		'desc'				=> '',		'type'				=> 'text', // text, textarea, checkbox, radio, select, number		'checkbox_label'	=> '', //show text after checkbox //show text after checkbox		'options'			=> array(), // array of keys/values for radio or select		'default'			=> '', // value to pre-populate option with (before first save or on reset)		'no_empty'			=> true, // if user empties value, force default to be saved instead		'allow_html'		=> false, // allow HTML to be used in the value		'class'				=> '', // classes to add to input		'custom_sanitize'	=> '', // function to do additional sanitization		'custom_content'	=> '' // function for custom display of field input	);	// SHOW A NOTE IF NO FIELDS -- hide save button too? How to make it NOT hide if there are other sections with fields	// SHOW A NOTE IF NO FIELDS -- maybe add some JS or CSS to hide/shows button depending on whether or not current section has fields	// SHOW A NOTE IF NO FIELDS	return $fields;}add_filter( 'ctps_fields-licenses', 'ctc_add_license_settings' );