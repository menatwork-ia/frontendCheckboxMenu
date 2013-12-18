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
 * Palettes
 */
$arrParts = trimsplit(";", $GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox']);
foreach ($arrParts as $intKey => $strValue)
{
    if(stripos($strValue, '{expert_legend:hide}') !== false)
    {
        $arrParts[$intKey] = $strValue . ',showAddAll';
        break;
    }
}

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['extendedCheckboxMenu'] = implode(';', $arrParts);

/**
 * Fields 
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['showAddAll'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['showAddAll'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class' => 'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);