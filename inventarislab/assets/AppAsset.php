<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendors/Freebees_webdesign_8/css/bootstrap.min.css',
        'vendors/abahlana/css/pager2.css',
        'vendors/fontawesome/css/all.min.css',
        'vendors/Freebees_webdesign_8/css/style.css',
    ];
    public $js = [
        'vendors/Freebees_webdesign_8/js/bootstrap.bundle.min.js',
        'vendors/Freebees_webdesign_8/js/addshadow.js',
        'vendors/Freebees_webdesign_8/js/slides.js',
    ];
    /* public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ]; */
}
