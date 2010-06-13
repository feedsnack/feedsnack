<?php
return array(
    'app' => array(
        'type'  => 'Zend_Controller_Router_Route_Hostname',
        'route' => 'feedsnack.localhost',
        'defaults' => array(
            'module'     => 'app',
        ),
        'chains' => array(
    		'index_index' => array(
        		'type'  => 'Zend_Controller_Router_Route',
        		'route' => 'home',
        		'defaults' => array(
            		'controller' => 'index',
            		'action'     => 'index'
       			 ),
       		),
       	),
    ),
);