<?php
return array(
    'database' => array(
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => '<projectname>',
        'username'  => '<projectname>',
        'password'  => '<projectname>',
    ),
    'tmp' => $this->get('project_root') . '/tmp',

    'secret_key' => '<secret>',

    'applications' => array(
        'IPF_Session',
        'IPF_Auth',
        'IPF_Admin',
        'Content',
    ),

    'middlewares' => array(
        'IPF_Middleware_Common',
        'IPF_Session_Middleware',
        'IPF\\Auth\\Middleware',
    ),

    'urls' => array(
        IPF_Admin_App::urls(),
        array('prefix'=>'', 'urls' => array(
            array('expr' => '/', 'func' => 'Content_Views_Index'),
        )),
    ),
);

