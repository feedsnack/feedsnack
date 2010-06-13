<?php
return array(
    'status' => array(
        'type'  => 'Zend_Controller_Router_Route_Hostname',
        'route' => 'status.feedsnack.localhost',
        'defaults' => array(
            'module'     => 'status',
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