<?php

$project_root = dirname(__FILE__).DIRECTORY_SEPARATOR.'..';

return array(
    'app_base' => '',
    'database' => array(
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => '<projectname>',
        'username'  => '<projectname>',
        'password'  => '<projectname>',
        'options' => array('persistent'),
    ),
    'tmp' => $project_root . '/tmp',

    'media_url' => '/media/',
    'media_path' => $project_root . '/htdocs/media/',
    'upload_url' => '/media/upload/',
    'upload_path' => $project_root . '/htdocs/media/upload/',
    'admin_media_url' => '/media/admin/',

    'secret_key' => '<secret>',

    'debug' => false,

    'applications' => array(
        'IPF_Session',
        'IPF_Auth',
        'IPF_Admin',
        'Content',
    ),

    'template_context_processors' => array(
        'IPF_Context_Auth',
        'IPF_Context_Media',
        'IPF_Context_AdminMedia',
        'IPF_Context_Upload',
        'IPF_Context_Version',
        'IPF_Context_Current',
    ),

    'middlewares' => array(
        'IPF_Middleware_Common',
        'IPF_Session_Middleware',
    ),

    'urls' => array(
        array('prefix'=>'#^/admin/', 'urls' => IPF_Admin_App::urls()),
        array('prefix'=>'', 'urls' => array(
            array('regex'=>'#^/$#', 'func' => 'Content_Views_Index'),
        )),
    ),
);
