<?php

namespace xj\ueditor;

use Yii;
use yii\web\AssetBundle;

class UeditorAssets extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-ueditor-widget/assets';
    public $js = [
        'ueditor.config.js',
        'ueditor.all.js',
    ];
    public $depends = ['yii\web\JqueryAsset'];

}
