<?php
return array(
    'jobs' => array(
        'type'  => 'Zend_Controller_Router_Route_Hostname',
        'route' => 'jobs.feedsnack.localhost',
        'defaults' => array(
            'module'     => 'jobs',
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