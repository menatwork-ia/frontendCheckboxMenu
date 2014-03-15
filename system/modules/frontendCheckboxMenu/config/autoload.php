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
	'FrontendCheckboxMenu' => 'system/modules/frontendCheckboxMenu/FrontendCheckboxMenu.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(	
	'frontend_heckbox_menu' => 'system/modules/frontendCheckboxMenu/templates/frontend_heckbox_menu',
));
