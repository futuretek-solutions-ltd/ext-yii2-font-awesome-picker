<?php

namespace futuretek\widgets;

use yii\bootstrap\InputWidget;
use yii\helpers\Html;
use yii\web\View;

/**
 * Class FontAwesomePicker
 *
 * @package app\classes\leaflet
 * @author  Lukas Cerny <lukas.cerny@futuretek.cz>
 * @license Apache-2.0
 * @link    http://www.futuretek.cz
 */
class FontAwesomePicker extends InputWidget
{
    const PLACEMENT_INLINE = 'inline';
    const PLACEMENT_TOP_LEFT_CORNER = 'topLeftCorner';
    const PLACEMENT_TOP_LEFT = 'topLeft';
    const PLACEMENT_TOP = 'top';
    const PLACEMENT_TOP_RIGHT = 'topRight';
    const PLACEMENT_TOP_RIGHT_CORNER = 'topRightCorner';
    const PLACEMENT_RIGHT_TOP = 'rightTop';
    const PLACEMENT_RIGHT = 'right';
    const PLACEMENT_RIGHT_BOTTOM = 'rightBottom';
    const PLACEMENT_BOTTOM_RIGHT_CORNER = 'bottomRightCorner';
    const PLACEMENT_BOTTOM_RIGHT = 'bottomRight';
    const PLACEMENT_BOTTOM = 'bottom';
    const PLACEMENT_BOTTOM_LEFT = 'bottomLeft';
    const PLACEMENT_BOTTOM_LEFT_CORNER = 'bottomLeftCorner';
    const PLACEMENT_LEFT_BOTTOM = 'leftBottom';
    const PLACEMENT_LEFT = 'left';
    const PLACEMENT_LEFT_TOP = 'leftTop';

    public $placement = self::PLACEMENT_BOTTOM_RIGHT;

    /**
     * @inheritdoc
     */
    public function run()
    {
        FontAwesomePickerAsset::register($this->view);
        $this->view->registerCss('div.iconpicker-items > div.tooltip { display:none!important; }', [], 'iconpicker-tooltip');
        $this->view->registerJs('$("#' . $this->options['id'] . '").iconpicker({
        placement: "' . $this->placement . '"
        });', View::POS_READY);

        Html::addCssClass($this->options, 'form-control');
        echo $this->hasModel() ? Html::activeTextInput($this->model, $this->attribute, $this->options) : Html::textInput($this->name, $this->value, $this->options);
    }
}