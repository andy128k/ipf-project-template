<?php
return array(
    'debug' => true,

    'middlewares' => array_merge(array(
        'IPF_Serve_Static_Middleware',
        ), $this->get('middlewares')
    ),
);

