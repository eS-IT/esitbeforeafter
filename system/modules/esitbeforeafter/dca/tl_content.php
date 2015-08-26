<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 *
 * @package     beforeafter
 * @filesource  tl_content.php
 * @version     1.0.0
 * @since       25.08.15 - 15:56
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2015
 * @license     LGPL
 */

/**
 * Set Tablename: tl_content
 */
$strName      = 'tl_content';


/* slectors */
$GLOBALS['TL_DCA'][$strName]['palettes']['__selector__'][] = 'bashowfulllinks';
$GLOBALS['TL_DCA'][$strName]['palettes']['__selector__'][] = 'baanimateintro';


/* Palettes */
$GLOBALS['TL_DCA'][$strName]['palettes']['beforeafter'] = '{type_legend},type,headline;{pictures_legend},bapictureone,bapicturetwo,size;{keyboard_legend},baenablekeyboard;{animation_legend},baanimateintro;{balink_legend},bashowfulllinks;{js_legend},baincludeui;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';


/* subpalettes */
$GLOBALS['TL_DCA'][$strName]['subpalettes']['bashowfulllinks']  = ',babeforelinktext,baafterlinktext';
$GLOBALS['TL_DCA'][$strName]['subpalettes']['baanimateintro']   = ',baintrodelay,baintroduration,baintroposition';


/* Fields */
$GLOBALS['TL_DCA'][$strName]['fields']['bapictureone'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['bapictureone'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('fieldType'=>'radio', 'filesOnly' => true, 'tl_class' => 'clr', 'mandatory' => true, 'extensions' => 'jpg,jpeg,gif,png,tif,tiff,bmp,svg,svgz'),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA'][$strName]['fields']['bapicturetwo'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['bapicturetwo'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('fieldType'=>'radio', 'filesOnly' => true, 'tl_class' => 'clr', 'mandatory' => true, 'extensions' => 'jpg,jpeg,gif,png,tif,tiff,bmp,svg,svgz'),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA'][$strName]['fields']['baanimateintro'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['baanimateintro'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['animateIntro'],
    'eval'                    => array('tl_class' => 'clr m12', 'submitOnChange' => true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA'][$strName]['fields']['baintrodelay'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['baintrodelay'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['introDelay'],
    'eval'                    => array('tl_class' => 'w50', 'maxlenght' => 255, 'rgxp' => 'digit', 'alwaysSave' => true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA'][$strName]['fields']['baintroduration'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['baintroduration'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['introDuration'],
    'eval'                    => array('tl_class' => 'w50', 'maxlenght' => 255, 'rgxp' => 'digit', 'alwaysSave' => true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA'][$strName]['fields']['bashowfulllinks'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['bashowfulllinks'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['showFullLinks'],
    'eval'                    => array('tl_class' => 'clr m12', 'submitOnChange' => true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA'][$strName]['fields']['babeforelinktext'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['babeforelinktext'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['beforeLinkText'],
    'eval'                    => array('tl_class' => 'w50', 'maxlenght' => 255, 'alwaysSave' => true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA'][$strName]['fields']['baafterlinktext'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['baafterlinktext'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['afterLinkText'],
    'eval'                    => array('tl_class' => 'w50', 'maxlenght' => 255, 'alwaysSave' => true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA'][$strName]['fields']['baenablekeyboard'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['baenablekeyboard'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['enableKeyboard'],
    'eval'                    => array('tl_class' => 'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA'][$strName]['fields']['baincludeui'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['baincludeui'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class' => 'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA'][$strName]['fields']['baintroposition'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['baintroposition'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['introPosition'],
    'options'                 => array(10,20,30,40,50,60,70,80,90,100),
    'eval'                    => array('tl_class' => 'w50', 'alwaysSave' => true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

// Wird nicht angezeigt
$GLOBALS['TL_DCA'][$strName]['fields']['bacursor'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['bacursor'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['cursor'],
    'eval'                    => array('tl_class' => 'w50', 'maxlenght' => 255, 'alwaysSave' => true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

// Wird nicht angezeigt
$GLOBALS['TL_DCA'][$strName]['fields']['baclickspeed'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['baclickspeed'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['clickSpeed'],
    'eval'                    => array('tl_class' => 'w50', 'maxlenght' => 255, 'rgxp' => 'digit', 'alwaysSave' => true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

// Wird nicht angezeigt
$GLOBALS['TL_DCA'][$strName]['fields']['balinkdisplayspeed'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['balinkdisplayspeed'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['linkDisplaySpeed'],
    'eval'                    => array('tl_class' => 'w50', 'maxlenght' => 255, 'rgxp' => 'digit', 'alwaysSave' => true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

// Wird nicht angezeigt
$GLOBALS['TL_DCA'][$strName]['fields']['badividercolor'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['badividercolor'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['dividerColor'],
    'eval'                    => array('tl_class' => 'w50', 'maxlenght' => 255, 'alwaysSave' => true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

// Wird nicht angezeigt
$GLOBALS['TL_DCA'][$strName]['fields']['bakeypressamount'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['bakeypressamount'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'                 => $GLOBALS['esit']['beforeafter']['defaults']['keypressAmount'],
    'eval'                    => array('tl_class' => 'w50', 'maxlenght' => 255, 'rgxp' => 'digit', 'alwaysSave' => true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
