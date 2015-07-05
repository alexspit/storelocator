<?php

class Pagination{
    
    public $obj;
  
    private $_db;
            
    
    public function __construct($obj) {
        $this->_db = DB::getInstance();  
        
        $this->obj = $obj;  
    }
    
    
    
}