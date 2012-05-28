<?php

class Application_Model_Contato extends Zend_Db_Table_Abstract
{
    protected $_name = 'contato';
    protected $_primary = 'id';
    public function _setupDatabaseAdapter()
    {
        $this->_setAdapter('database');
    }
    
    public function getAll($where)
    {
    	return $this->fetchAll();
    }
    
    public function gelRecord($idConato){
    	return $this->fetchRow("idContato = '$idConato'");
    	
    	
    	return $this->find($idConato);
    	
    	
    	
    }

}