<?php
return array(
    'help' => array(
        'type'  => 'Zend_Controller_Router_Route_Hostname',
        'route' => 'help.feedsnack.localhost',
        'defaults' => array(
            'module'     => 'help',
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