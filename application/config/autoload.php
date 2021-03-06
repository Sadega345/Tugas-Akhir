<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| This file specifies which systems should be loaded by default.
|
| In order to keep the framework as light-weight as possible only the
| absolute minimal resources are loaded by default. For example,
| the database is not connected to automatically since no assumption
| is made regarding whether you intend to use it.  This file lets
| you globally define which systems you would like loaded with every
| request.
|
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
|
| These are the things you can load automatically:
|
| 1. Packages
| 2. Libraries
| 3. Drivers
| 4. Helper files
| 5. Custom config files
| 6. Language files
| 7. Models
|
*/

/*
| -------------------------------------------------------------------
|  Auto-load Packages
| -------------------------------------------------------------------
| Prototype:
|
|  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
|
*/
$autoload['packages'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
| These are the classes located in system/libraries/ or your
| application/libraries/ directory, with the addition of the
| 'database' library, which is somewhat of a special case.
|
| Prototype:
|
|	$autoload['libraries'] = array('database', 'email', 'session');
|
| You can also supply an alternative library name to be assigned
| in the controller:
|
|	$autoload['libraries'] = array('user_agent' => 'ua');
*/
$autoload['libraries'] = array('database', 'session', 'form_validation');

/*
| -------------------------------------------------------------------
|  Auto-load Drivers
| -------------------------------------------------------------------
| These classes are located in system/libraries/ or in your
| application/libraries/ directory, but are also placed inside their
| own subdirectory and they extend the CI_Driver_Library class. They
| offer multiple interchangeable driver options.
|
| Prototype:
|
|	$autoload['drivers'] = array('cache');
|
| You can also supply an alternative property name to be assigned in
| the controller:
|
|	$autoload['drivers'] = array('cache' => 'cch');
|
*/
$autoload['drivers'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['helper'] = array('url', 'file');
*/
$autoload['helper'] = array('url','form','date');

/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['config'] = array('config1', 'config2');
|
| NOTE: This item is intended for use ONLY if you have created custom
| config files.  Otherwise, leave it blank.
|
*/
$autoload['config'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| NOTE: Do not include the "_lang" part of your file.  For example
| "codeigniter_lang.php" would be referenced as array('codeigniter');
|
*/
$autoload['language'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['model'] = array('first_model', 'second_model');
|
| You can also supply an alternative model name to be assigned
| in the controller:
|
|	$autoload['model'] = array('first_model' => 'first');
*/
$autoload['model'] = array('model_login','Model_password','model_squrity','model_fakultas','model_prodi','model_instrumen','model_user','model_admin','Data_dosen_model','Data_dosens_model','Pengisi_model','Pengisis_model','Prodi_model','Prodis_model','model_role','Apd_a311_model','Apd_a313_model','Apd_a341_model','Apd_a345_model','Apd_b321_model','Apd_a431_model','Apd_a432_model','Apd_a433_model','Apd_a434_model','Apd_a435_model','Apd_a441_model','Apd_a442_model','Apd_a451_model','Apd_a452_model','Apd_a453_model','Apd_a455_model','Apd_a461_model','Apd_a5121_model','Apd_a522_model','Apd_a541_model','Apd_a552_model','Apd_a6211_model','Apd_a6212_model','Apd_a622_model','Apd_a623_model','Apd_a631_model','Apd_a641_model','Apd_a652_model','Apd_a711_model','Apd_a712_model','Apd_a721_model','Apd_b711_model',
	'Apd_b721_model','Apd_b6111_model','Apd_b6112_model','Apd_b6113_model','Apd_b642_model','Apd_b312_model','Apd_b411_model','Apd_b412_model','Apd_b42_model','Aps_a311_model','Aps_b321_model','Aps_a431_model','Aps_a432_model',
	'Aps_a433_model','Aps_a434_model','Aps_a435_model','Aps_a441_model','Aps_a442_model','Aps_a451_model','Aps_a452_model','Aps_a453_model',
	'Aps_a455_model','Aps_a461_model','Aps_a5121_model','Aps_a522_model','Aps_a541_model','Aps_a552_model','Aps_a6211_model','Aps_a6212_model',
	'Aps_a622_model','Aps_a623_model','Aps_a631_model','Aps_a641_model','Aps_a652_model','Aps_a711_model','Aps_a712_model','Aps_a721_model',
	'Aps_b312_model','Aps_b321_model','Apd_b411_model','Apd_b412_model','Aps_b42_model','Aps_b6111_model','Aps_b6112_model','Aps_b6113_model',
	'Aps_b642_model','Aps_b711_model','Aps_b721_model','Pengisis_model','Data_dosens_model','Aps_b411_model','Aps_b412_model','Aps_a331_model','Aps_a5122_model','Aps_a513_model','Aps_a551_model','Aps_a6411_model','Aps_a6412_model','Aps_a713_model','Aps_a714_model','Model_Download','Aps_a454_model');
