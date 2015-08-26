<?php
/**
 * @package     beforeafter
 * @filesource  autoload.php
 * @version     1.0.0
 * @since       25.08.15 - 15:40
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2015
 * @license     LGPL
 */
/**
 * Variables
 */
$strFolder      = 'esitbeforeafter';
$strNamespace   = 'esit\\' . $strFolder;



/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	$strNamespace
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	$strNamespace . '\\classes\\contao\\elements\\BeforeAfter'  => "system/modules/$strFolder/classes/contao/elements/BeforeAfter.php",

    // Helper
    $strNamespace . '\\classes\\helper\\ImageCompiler'          => "system/modules/$strFolder/classes/helper/ImageCompiler.php",
    $strNamespace . '\\classes\\helper\\ScriptCompiler'         => "system/modules/$strFolder/classes/helper/ScriptCompiler.php",
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_beforeafter'    => "system/modules/$strFolder/templates",
	'ce_beforeafter_js' => "system/modules/$strFolder/templates",
));
