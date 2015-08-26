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
 * @since       25.08.15 - 17:09
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2015
 * @license     LGPL
 */
/**
 * Set Tablename
 */
$strName = 'tl_content';


/**
 * Fields
 */
$GLOBALS['TL_LANG'][$strName]['bapictureone']       = array('Erstes Bild', 'Bitte wählen Sie das erste Bild für den Vergleich aus.');
$GLOBALS['TL_LANG'][$strName]['bapicturetwo']       = array('Zweites Bild', 'Bitte wählen Sie das zweite Bild für den Vergleich aus.');
$GLOBALS['TL_LANG'][$strName]['baanimateintro']     = array('Introanimation', 'Bitte wählen Sie, ob sich der Schieber beim Laden von links in die Mitte bewegen soll.');
$GLOBALS['TL_LANG'][$strName]['baintrodelay']       = array('Verzögerung vor der Introanimation', 'Bitte geben Sie die Verzögerung vor der Introanimation in Millisekunden ein.');
$GLOBALS['TL_LANG'][$strName]['baintroduration']    = array('Dauer der Introanimation', 'Bitte geben Sie die Dauer der Introanimation in Millisekunden ein.');
$GLOBALS['TL_LANG'][$strName]['baintroposition']    = array('Position der Trennlinie', 'Bitte wählen Sie die Position der Trennlinie aus.');
$GLOBALS['TL_LANG'][$strName]['bashowfulllinks']    = array('Links für das Umschalten der Bilder', 'Bitte wählen Sie, ob die Links für das Umschalten der Bilder angezeigt werden sollen.');
$GLOBALS['TL_LANG'][$strName]['babeforelinktext']   = array('Linktext für die Anzeige des ersten Bilds', 'Bitte geben Sie den Linktext für die Anzeige des ersten Bilds ein.');
$GLOBALS['TL_LANG'][$strName]['baafterlinktext']    = array('Linktext für die Anzeige des zweiten Bilds', 'Bitte geben Sie den Linktext für die Anzeige des zweiten Bilds ein.');
$GLOBALS['TL_LANG'][$strName]['baenablekeyboard']   = array('Verschieben per Testatur erlauben', 'Bitte wählen Sie, ob das Verschieben per Testatur erlauben sein soll.');
$GLOBALS['TL_LANG'][$strName]['bacursor']           = array('Art des Cursors', 'Bitte wählen Sie die Art des Cursors.');
$GLOBALS['TL_LANG'][$strName]['baclickspeed']       = array('Weite des Verschiebens bei einem Klick auf einen der Pfeile', 'Bitte geben Sie die Weite des Verschiebens bei einem Klick auf einen der Pfeile ein.');
$GLOBALS['TL_LANG'][$strName]['balinkdisplayspeed'] = array('Dauer der Überblendung beim Klick auf einen Link', 'Bitte geben Sie die Dauer der Überblendung beim Klick auf einen Link in Millisekungen ein.');
$GLOBALS['TL_LANG'][$strName]['badividercolor']     = array('Farbe der Trennlinie', 'Bitte geben Sie die Farbe der Trennlinie in HTML-Notation ein.');
$GLOBALS['TL_LANG'][$strName]['bakeypressamount']   = array('Anzahl der Pixel, um die sich die Trennline bei der Benutzung der Tastatur bewegt', 'Bitte geben Sie die Anzahl der Pixel ein, um die sich die Trennline bei der Benutzung der Tastatur bewegt.');
$GLOBALS['TL_LANG'][$strName]['baincludeui']        = array('jQueryUI automatisch einbinden', 'Ist der Haken gesetzt wird eine vollständige Version von jQueryUI eingebunden. (Dies ist nur nötig, wenn die jQueryUI nicht manuell eingebunden wird! Die Contao-Version recicht nicht aus!)');


/**
 * Legends
 */
$GLOBALS['TL_LANG'][$strName]['pictures_legend']    = 'Bilder';
$GLOBALS['TL_LANG'][$strName]['keyboard_legend']    = 'Tastatureinstellungen';
$GLOBALS['TL_LANG'][$strName]['animation_legend']   = 'Animationseinstellungen';
$GLOBALS['TL_LANG'][$strName]['balink_legend']      = 'Einstellungen für die Links';
$GLOBALS['TL_LANG'][$strName]['js_legend']          = 'JavaScript-Einstellungen';