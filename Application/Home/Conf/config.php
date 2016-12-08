<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_THEME'    =>    'default',

    /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/static',
        '__IMG__'    => __ROOT__ . '/Application/Home/View/default/Public/images/',
        '__CSS__'    => __ROOT__ . '//Application/Home/View/default/Public/css/',
        '__JS__'     => __ROOT__ . '/Application/Home/View/default/Public/js/'
    )
);