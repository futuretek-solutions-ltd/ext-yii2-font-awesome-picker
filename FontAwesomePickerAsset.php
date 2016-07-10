<?php
namespace futuretek\widgets;

use yii\web\AssetBundle;

/**
 * Class FontAwesomePickerAsset
 *
 * @package futuretek\widgets
 * @author  Lukas Cerny <lukas.cerny@futuretek.cz>
 * @license http://www.futuretek.cz/license FTSLv1
 * @link    http://www.futuretek.cz
 */
class FontAwesomePickerAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->sourcePath = '@vendor/bower-asset/fontawesome-iconpicker/dist';
        $this->css = [
            'css/fontawesome-iconpicker.min.css',
        ];
        $this->js = [
            'js/fontawesome-iconpicker.min.js',
        ];
        $this->depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
        ];
    }
}
