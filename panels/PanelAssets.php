<?php
namespace intersvyaz\xhprof\panels;

use yii\web\AssetBundle;

class PanelAssets extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../assets';
    public $js = [
        'xhprof.js',
    ];
}
