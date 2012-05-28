<?php

class ContatoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $apc = new Application_Model_Contato();
        
        echo("<pre>".print_r($apc->getAll(), 1)."</pre>");
    }


}

