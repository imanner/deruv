<?php
/**
 * This file is generated by the "yii asset" command.
 * DO NOT MODIFY THIS FILE DIRECTLY.
 * @version 2017-07-02 04:48:51
 */
return [
    'lib' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
        'js' => [
            'lib-5be2ad28b6cb17e90661da5ac9cbd78c.js',
        ],
        'css' => [
            'lib-86465325b6fd85e471133c66e52882fa.css',
        ],
        'jsOptions' => [
            'position' => 1,
        ],
        'sourcePath' => null,
        'depends' => [],
    ],
    'yii\\bootstrap\\BootstrapAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'lib',
        ],
    ],
    'yii\\web\\JqueryAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'lib',
        ],
    ],
    'yii\\bootstrap\\BootstrapPluginAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'yii\\bootstrap\\BootstrapAsset',
            'lib',
        ],
    ],
    'yii\\web\\YiiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'lib',
        ],
    ],
];