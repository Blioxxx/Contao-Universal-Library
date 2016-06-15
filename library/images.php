<?php
/**
 * Picture Library Class
 * @copyright Blioxxx <http://blioxxx.de>
 * @author Mirco Kibiger <mkibiger@blioxxx.de>
 * @package Universal Library
 */

namespace Blioxxx\uLibrary;

class images extends \Contao\System
{
    public function __construct()
    {
        \System::__construct();
        $this->import("Database");
    }

    public function getPictureFromDB($strTable, $strColumn, $strWhereParam, $strObjID)
    {
        $query = "SELECT ".$strColumn." FROM ".$strTable."WHERE ".$strWhereParam."=?";
        $objPicture = $this->Database->prepare($query)->execute($strObjID);
        $objFile = \FilesModel::findByUuid($objPicture->$strColumn);
        return $objFile->path;
    }
}