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
        'site/libs/font-awesome-4.7.0/css/font-awesome.min.css',
        'site/css/bootstrap.min.css',
        'site/js/slick/slick.css',
        'site/js/slick/slick-theme.css',
        'site/css/stylesheet.css',
        'site/css/style.css',
        'site/css/asu-stayle.css',
        'site/css/des-style.css',
        'site/css/media.css',
    ];
    public $js = [
        'site/js/jquery-3.2.1.min.js',
        'site/js/bootstrap.min.js',
        'site/js/owlcarousel/owl.carousel.min.js',
        'site/js/slick/slick.js',
        'site/libs/fancybox-master/dist/jquery.fancybox.min.js',
        'site/js/common.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
