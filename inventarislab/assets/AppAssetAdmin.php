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
class AppAssetAdmin extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendors/adminlte/css/adminlte.css',
        'vendors/abahlana/css/pager2.css',
        'vendors/fontawesome/css/all.min.css',
    ];
    public $js = [
        // 'vendors/adminlte/plugins/jquery/jquery.min.js',
        'vendors/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'vendors/adminlte/js/adminlte.min.js',
        'vendors/fontawesome/js/all.min.js',
    ];
    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap4\BootstrapAsset',
    // ];
}
