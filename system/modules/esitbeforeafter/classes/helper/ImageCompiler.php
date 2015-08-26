<?php
/**
 * @package     beforeafter
 * @filesource  ImageCompiler.php
 * @version     1.0.0
 * @since       26.08.15 - 15:52
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2015
 * @license     LGPL
 */

namespace esit\esitbeforeafter\classes\helper;


class ImageCompiler
{


    /**
     * Gibt den Pfad und die Abmessungen des angepassten Bilds zurück.
     * @param $strImageId
     * @param $strSize
     * @return mixed
     */
    public static function getImageData($strImageId, $strSize)
    {
        $objImg     = \Contao\FilesModel::findByPk($strImageId);
        $arrSize    = deserialize($strSize);

        if (!is_array($arrSize)) {
            $arrSize            = getimagesize($objImg->path);
            $imageObj           = \Contao\Image::create($objImg->path, array($arrSize[0], $arrSize[1], $arrSize[2]));
            $imageObj->executeResize();
            $arrData['path']    = $imageObj->getResizedPath();
        }

        if (!isset($arrData['path'])) {
            $arrData['path']    = $objImg->path;
        }

        $arrData['name']    = $objImg->name;
        $arrData['width']   = $arrSize[0];
        $arrData['height']  = $arrSize[1];

        return $arrData;
    }
}