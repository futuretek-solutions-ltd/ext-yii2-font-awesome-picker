<?php

namespace futuretek\widgets;

use yii\bootstrap\InputWidget;
use yii\web\View;

/**
 * Class FontAwesomePicker
 *
 * @package app\classes\leaflet
 * @author  Lukas Cerny <lukas.cerny@futuretek.cz>
 * @license http://www.futuretek.cz/license FTSLv1
 * @link    http://www.futuretek.cz
 */
class FontAwesomePicker extends InputWidget
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerAssets();
        parent::run();
    }

    /**
     * Register assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        FontAwesomePickerAsset::register($view);

        $view->registerJs('$("#' . $this->id . '").iconpicker();', View::POS_READY);
    }
}