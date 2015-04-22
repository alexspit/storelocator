<?php

class Business_Hour{
    
    public $opening_hours_id, 
           $day,
           $open,
           $close,
           $business_id;

    private $_db;
            
    
    public function __construct($day=null, $open=null, $close = null) {
        $this->_db = DB::getInstance();  
        $this->day = $day;
        $this->open = $open;
        $this->close = $close;   
    }
}

