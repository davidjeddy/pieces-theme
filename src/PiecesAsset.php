<?php

namespace davidjeddy\pieces;

use yii\web\AssetBundle;

/**
 *
 * @author David Eddy <me@davidjeddy.com>
 * @since 0.0.5
 */
class PiecesAsset extends AssetBundle
{
    public $sourcePath = '@vendor/davidjeddy/yii2-pieces-theme/src/assets';

    public $css = [
        'css/pieces.css',
    ];

    public $js = [
        'js/pieces.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

        'common\assets\Html5shiv',
    ];
}
