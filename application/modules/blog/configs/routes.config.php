<?php
return array(
    'blog' => array(
        'type'  => 'Zend_Controller_Router_Route_Hostname',
        'route' => 'blog.feedsnack.localhost',
        'defaults' => array(
            'module'     => 'blog',
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