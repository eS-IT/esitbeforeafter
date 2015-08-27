<?php
/**
 * @package     beforeafter
 * @filesource  BeforeAfter.php
 * @version     1.0.0
 * @since       25.08.15 - 15:44
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2015
 * @license     LGPL
 */

namespace esit\esitbeforeafter\classes\contao\elements;

use esit\esitbeforeafter\classes\helper\ImageCompiler;
use esit\esitbeforeafter\classes\helper\ScriptCompiler;

/**
 * Class BeforeAfter
 * @package esitbeforeafter\classes\contao\elements
 */
class BeforeAfter extends \ContentElement
{


    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_beforeafter';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->genBeOutput();
        } else {
            $this->genFeOutput();
        }
    }


    /**
     * Erzeugt die Ausgebe für das Backend.
     * @return string
     */
    private function genBeOutput()
    {
        $this->strTemplate          = 'be_wildcard';
        $this->Template             = new \BackendTemplate($this->strTemplate);
        $this->Template->title      = $this->headline;
        $this->Template->wildcard   = "### BeforeAfter ###";
    }


    /**
     * Erzeugt die Ausgebe für das Frontend.
     * @return string
     */
    private function genFeOutput()
    {
        $strContainerId                 = 'bacontainer-' . uniqid();
        $objScriptCompiler              = new ScriptCompiler();
        $this->Template->strScript      = $objScriptCompiler->compile($strContainerId, $this->arrData);
        $this->Template->strContainerId = $strContainerId;
        $this->Template->arrImgOne      = ImageCompiler::getImageData($this->bapictureone, $this->size);
        $this->Template->arrImgTwo      = ImageCompiler::getImageData($this->bapicturetwo, $this->size);
    }
}
