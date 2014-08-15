<?php

$project_root = dirname(__FILE__).DIRECTORY_SEPARATOR.'..';

return array(
    'database' => array(
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => '<projectname>',
        'username'  => '<projectname>',
        'password'  => '<projectname>',
        'options' => array('persistent'),
    ),
    'tmp' => $project_root . '/tmp',

    'secret_key' => '<secret>',

    'debug' => false,

    'applications' => array(
        'IPF_Session',
        'IPF_Auth',
        'IPF_Admin',
        'Content',
    ),

    'middlewares' => array(
        'IPF_Middleware_Common',
        'IPF_Session_Middleware',
        'IPF_Auth_Middleware',
    ),

    'urls' => array(
        array('prefix'=>'#^/admin/', 'urls' => IPF_Admin_App::urls()),
        array('prefix'=>'', 'urls' => array(
            array('expr' => '/', 'func' => 'Content_Views_Index'),
        )),
    ),
);

