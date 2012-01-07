<?php
/**********************************************************************************
* add_settings.php                                                                *
***********************************************************************************
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
*                                                                                 *
* This file is a simplified database installer. It does what it is suppoed to.    *
**********************************************************************************/

// If we have found SSI.php and we are outside of SMF, then we are running standalone.
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF')) // If we are outside SMF and can't find SSI.php, then throw an error
	die('<b>Error:</b> Cannot install - please verify you put this file in the same place as SMF\'s SSI.php.');

if (SMF == 'SSI')
	db_extend('packages');

global $modSettings, $smcFunc;

// List settings here in the format: setting_key => default_value.  Escape any "s. (" => \")
$mod_settings = array(
	'hs4smf_enabled' => 0,
	'hs4smf_enablecoral' => 0,
	'hs4smf_enablegalleryfade' => 1,
	'hs4smf_enablecredits' => 0,
	'hs4smf_enableonattachments' => 1,
	'hs4smf_enablecenter' => 1,
	'hs4smf_slideshowdelay' => 4,
	'hs4smf_appearance' => 1,
	'hs4smf_dimmingopacity' => 4,
	'hs4smf_headingsource' => 0,
	'hs4smf_captionsource' => 4,
	'hs4smf_sourceopacity' => 10,
	'hs4smf_captionposition' => 1,
	'hs4smf_headingposition' => 0,
	'hs4smf_sourcemouse' => 1,
	'hs4smf_endableslideshow' => 1,
	'hs4smf_slideshowrepeat' => 1,
	'hs4smf_slideshowcontrollocation' => 6,
    'hs4smf_slideshowcontrols' => 1,
    'hs4smf_slideshowgrouping' => 1,
    'hs4smf_slideshownumbers' => 1,
	'hs4smf_nudgex' => 0,
	'hs4smf_nudgey' => 0,
	'hs4smf_slidebackgroundcolor' => 'FFFFFF',
	'hs4smf_slideshowmouse' => 1,
	'hs4smf_slidecontrolsalways' => 0,
	'hs4smf_aeva_format' => 0,
	'hs4smf_gallerycounter' => 0,
);

// Settings to create the new tables...
$tables = array();

// Add a row to an existing table
$rows = array();

// Add a column to an existing table
$columns = array();

// Update mod settings if applicable
foreach ($mod_settings as $new_setting => $new_value)
{
	if (!isset($modSettings[$new_setting]))
		updateSettings(array($new_setting => $new_value));
}

foreach ($tables as $table)
  $smcFunc['db_create_table']($table['table_name'], $table['columns'], $table['indexes'], $table['parameters'], $table['if_exists'], $table['error']);

foreach ($rows as $row)
  $smcFunc['db_insert']($row['method'], $row['table_name'], $row['columns'], $row['data'], $row['keys']);

foreach ($columns as $column)
  $smcFunc['db_add_column']($column['table_name'], $column['column_info'], $column['parameters'], $column['if_exists'], $column['error']);

if (SMF == 'SSI')
   echo 'Congratulations! You have successfully installed the HS4SMF mod!';

?>