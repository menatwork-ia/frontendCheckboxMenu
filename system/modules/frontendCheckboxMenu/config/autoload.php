<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'FormExtendedCheckboxMenu' => 'system/modules/frontendCheckboxMenu/FormExtendedCheckboxMenu.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(	
	'form_extended_checkbox_menu' => 'system/modules/frontendCheckboxMenu/templates/form_extended_checkbox_menu',
));
