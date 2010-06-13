<?php
return array(
    'developer' => array(
        'type'  => 'Zend_Controller_Router_Route_Hostname',
        'route' => 'dev.feedsnack.localhost',
        'defaults' => array(
            'module'     => 'developer',
        ),
        'chains' => array(
    		'index_index' => array(
        		'type'  => 'Zend_Controller_Router_Route',
        		'route' => '',
        		'defaults' => array(
            		'controller' => 'index',
            		'action'     => 'index'
       			 ),
       		),
       	),
    ),
);