<?php
/**
 * Blog Bootstrap class
 */
class App_Bootstrap extends Zend_Application_Module_Bootstrap
{
    /**
     * Config data
     *
     * @var Zend_Config
     */
    protected $_config;

    /**
     * Load configuration on init
     *
     * @param Zend_Application $application
     */
    public function __construct($application)
    {
        parent::__construct($application);

        $this->_config = new Zend_Config(include dirname(__FILE__) . '/configs/config.php');
    }
    
 	protected function _initAutoload()
    {
        $resourceLoader = new Zend_Application_Module_Autoloader(array(
            'namespace' => 'App',
            'basePath'  => dirname(__FILE__) . '/',
        ));
    }

    /**
     * Init routes
     *
     * @return void
     */
    protected function _initRoutes()
    {
        $router = $this->getApplication()
        				->bootstrap('router')
                       	->getPluginResource('router')
                       	->getRouter();

        $router->addConfig($this->_config->routes);
    }

    /**
     * Init navigation
     *
     * @return void
     */
	protected function _initNavigation()
    {
        $navigation = $this->getApplication()
        				->bootstrap('navigation')
        				->getPluginResource('navigation')
        				->getContainer();
		
        $navigation->addPages($this->_config->navigation);
    }
}