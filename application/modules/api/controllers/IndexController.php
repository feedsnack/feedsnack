<?php

class Api_IndexController extends Zend_Rest_Controller
{

    public function init()
    {
        $this->_helper->layout()->disableLayout();
  		$this->_helper->viewRenderer->setNoRender();
    }

	public function indexAction()
    {
        $this->getResponse()
                ->setHttpResponseCode(200)
                ->appendBody('indexAction has been called.');
    }
 
    public function getAction()
    {
         $this->getResponse()
                ->setHttpResponseCode(200)
                ->appendBody('getAction has been called');
    }
   
    public function postAction()
    {
        $this->getResponse()
                ->setHttpResponseCode(200)
                ->appendBody('postAction has been called');
    }
   
    public function putAction()
    {
        $this->getResponse()
                ->setHttpResponseCode(200)
                ->appendBody('putAction has been called');
    }
   
    public function deleteAction()
    {
        $this->getResponse()
                ->setHttpResponseCode(200)
                ->appendBody('deleteAction has been called');
    }
}

