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
        $this->sourcePath = '@vendor/futuretek/yii2-font-awesome-picker/assets';
        $this->css = [
            YII_DEBUG ? 'css/fontawesome-iconpicker.css ' : 'css/fontawesome-iconpicker.min.css',
        ];
        $this->js = [
            YII_DEBUG ? 'js/fontawesome-iconpicker.js' : 'js/fontawesome-iconpicker.min.js',
        ];
        $this->depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
        ];
    }
}
