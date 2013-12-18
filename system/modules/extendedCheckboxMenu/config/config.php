<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2013
 * @package    extendedCheckboxMenu
 * @license    GNU/LGPL
 * @filesource
 */

/**
 * Front end form fields
 */

if(isset($GLOBALS['TL_FFL']['extendedCheckboxMenu']))
{
	trigger_error('There is allready a extendedCheckboxMenu - throw by extendedCheckboxMenu', E_NOTICE);
}
else
{
	$GLOBALS['TL_FFL']['extendedCheckboxMenu'] = 'FormExtendedCheckboxMenu';
}