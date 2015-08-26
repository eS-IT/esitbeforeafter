<?php
/**
 * @package     beforeafter
 * @filesource  scriptCompiler.php
 * @version     1.0.0
 * @since       26.08.15 - 15:20
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2015
 * @license     LGPL
 */
namespace esit\esitbeforeafter\classes\helper;

/**
 * Class ScriptCompiler
 * @package esit\esitbeforeafter\classes\helper
 */
class ScriptCompiler
{


    /**
     * Name des Templates
     * @var string
     */
    protected $strTemplate = 'ce_beforeafter_js';


    /**
     * Instanz von \Contao\FrontendTemplate
     * @var null
     */
    protected $objTemplate = null;


    /**
     * Erstllt eine Instanz der Klasse.
     */
    public function __construct()
    {
        $this->objTemplate = new \Contao\FrontendTemplate($this->strTemplate);
    }


    public function compile($strContainerId, $arrData)
    {
        $this->includeJqeryUi($arrData);
        $this->includeBeforeAfter();
        return $this->getScript($strContainerId, $arrData);
    }


    /**
     * Erzeugt das JavaScript mit den Einstellungen für das beforeafter-Plugin.
     * @param $strContainerId
     * @return string
     */
    protected function getScript($strContainerId, $arrData)
    {
        $this->objTemplate->strContainerId  = $strContainerId;
        $arrOptions                         = array();

        foreach ($GLOBALS['esit']['beforeafter']['defaults'] as $strKey => $varValue){
            $strContaoKey = strtolower('ba' . $strKey);

            switch ($strKey) {
                case 'introPosition':
                    $varTempValue = $this->getValue($strContaoKey, $varValue, $arrData);
                    $arrOptions[$strKey] = $varTempValue / 100;
                    break;

                case 'animateIntro':
                case 'showFullLinks':
                case 'enableKeyboard':
                    $arrOptions[$strKey] = ($arrData[$strContaoKey]) ? true : false;
                    break;

                default:
                    $arrOptions[$strKey] = $this->getValue($strContaoKey, $varValue, $arrData);
                    break;
            }
        }

        // Im Pfad '\/' durch '/' ersetzen!
        $strOptions                     = str_replace('\/', '/', json_encode($arrOptions));
        $this->objTemplate->strOptions  = $strOptions;

        return $this->objTemplate->parse();
    }


    /**
     * Prüft ob ein Wert gesetzt ist, falls nicht wird der Standardwert zurück gegeben.
     * @param $strContaoKey
     * @param $varValue
     * @return mixed
     */
    protected function getValue($strContaoKey, $varValue, $arrData)
    {
        if (isset($arrData[$strContaoKey]) && $arrData[$strContaoKey]) {
            $blnGroupShow = true;   // Wenn das Feld nicht in einer Gruppe ist, immer true!

            if (array_key_exists($strContaoKey, $GLOBALS['esit']['beforeafter']['groups'])) {
                $strGroup       = $GLOBALS['esit']['beforeafter']['groups'][$strContaoKey];
                $blnGroupShow   = $arrData[$strGroup]; // [true|false] je nach Auswahl im BE!
            }

            if ($blnGroupShow) {
                return $arrData[$strContaoKey];
            }
        }

        return $varValue;
    }


    /**
     * Läade jQueryUi.
     */
    protected function includeJqeryUi($arrData)
    {
        $strScript = '<script src="system/modules/esitbeforeafter/assets/js/jquery-ui/jquery-ui.min.js"></script>';

        if ($arrData['baincludeui'] && (!isset($GLOBALS['TL_HEAD']) || !in_array($strScript, $GLOBALS['TL_HEAD']))) {
            $GLOBALS['TL_HEAD'][] = $strScript;
        }
    }


    /**
     * Läadt das beforeafter-Plugin.
     */
    protected function includeBeforeAfter()
    {
        $strScript = '<script src="system/modules/esitbeforeafter/';
        $strScript.= 'assets/js/beforeafter/js/jquery.beforeafter-1.4.min.js"></script>';

        if (!isset($GLOBALS['TL_HEAD']) || !in_array($strScript, $GLOBALS['TL_HEAD'])) {
            $GLOBALS['TL_HEAD'][] = $strScript;
        }
    }
}