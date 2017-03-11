<?php

namespace frontend\assets;

use yii\web\AssetBundle;

	class MainAsset 
		extends AssetBundle{

			public $basePath = '@webroot';
			public $baseUrl = '@web';

			public $js = [
				'source/script.js',
				'source/owl-carousel/owl.carousel.js',
				'source/slitslider/js/modernizr.custom.79639.js',
				'source/slitslider/js/jquery.ba-cond.min.js',
				'source/slitslider/js/jquery.slitslider.js',
				'source/js/google_analytics_auto.js',
			];

			public $css = [
				'source/style.css',
				'source/owl-carousel/owl.carousel.css',
				'source/owl-carousel/owl.theme.css',
				'source/slitslider/css/style.css',
				'source/slitslider/css/custom.css',
			];

			public $depends = [
				'yii\web\YiiAsset',
        		'yii\bootstrap\BootstrapAsset',
        		'yii\bootstrap\BootstrapPluginAsset',
			];

		}

?>