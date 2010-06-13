<?php
return array(
    'api' => array(
        'type'  => 'Zend_Controller_Router_Route_Hostname',
        'route' => 'api.feedsnack.localhost',
        'chains' => array(
    		'index_index' => array(
        		'type'  => 'Zend_Rest_Route',
        		'route' => '',
        		'defaults' => array(
            		'module'     => 'api',
        		),
       		),
       	),
    ),
);
