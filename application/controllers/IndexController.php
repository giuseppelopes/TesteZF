<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    
    public function helloAction()
    {	
    	$arrayTeste = array('teste1', 'teste2', 'teste3');
    	$this->view->assign("nome", "Morvana");
    	$this->view->assign("array", $arrayTeste);
    	
    	$var1 = "teste";
    	$var2 = '';
    	
    	if(Application_Model_Validator::myIsSet($var1, $var2))
    		echo("true");
    	else
    		echo("false");
    	
    }
    
    
    public function createAction(){
    	
    }
    
    public function saveAction(){
    	$this->_helper->viewRenderer->setNoRender(true);
    	$arrayTeste = array('teste1', 'teste2', 
    			'teste3' => array('teste1', 'teste2')
    			);
    	
    	$this->_helper->json($arrayTeste);
    	
    }
    
    public function updateAction(){
    	 
    }
    
    public function deleteAction(){
    	 
    }

}

