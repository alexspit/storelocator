<?php
class Address {
   
    public $address_id, 
           $business_id,
           $country,
           $city,
           $street,
           $zip_code,
           $longitude,
           $latitude;
           
           
       
    private $_db;
            
    
    public function __construct($country = null, $city = null, $street = null, $zip_code = null, $lon=null, $lat=null) {
        $this->_db = DB::getInstance();  
        
        $this->country = $country;
        $this->city = $city;
        $this->street = $street;
        $this->zip_code = $zip_code;
        $this->longitude = $lon;
        $this->latitude = $lat;
    }
    

}
