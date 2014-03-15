<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2014
 * @package    frontendCheckboxMenu
 * @license    GNU/LGPL
 * @filesource
 */

/**
 * Front end form fields
 */

if(isset($GLOBALS['TL_FFL']['frontendCheckboxMenu']))
{
	trigger_error('There is already a frontendCheckboxMenu - throw by frontendCheckboxMenu', E_NOTICE);
}
else
{
	$GLOBALS['TL_FFL']['frontendCheckboxMenu'] = 'FrontendCheckboxMenu';
}