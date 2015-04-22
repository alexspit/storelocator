<?php
class Business {
   
    public $business_id, 
           $business_name,
           $email,
           $mobile,
           $landline,
           $creator,
           $creator_id,
           $category,
           $category_id,
           $short_desc,
           $long_desc,
           $logo_path,
           $date_created,
           $facebook,
           $linkedin,
           $twitter,
           $google,
           $address,
           $business_hour;
           
       
    private $_db;
            
    
    public function __construct($id = null) {
        $this->_db = DB::getInstance();   
        if ($id){
            
            $this->business_id = $id;
            
           $this->get();
           
        }
    }
    
    public function create()
    {
        $sql = "INSERT INTO business ( business_name, creator_id, category_id )VALUES (?,?,?)";
        $parameters = array($this->business_name,$this->creator_id, $this->category_id);
        $result = $this->_db->query($sql, $parameters);
        return $result->last_inserted_id;
    }
    
    public function get()
    {
        $sql = "SELECT b.business_name, b.email, b.mobile, b.landline, b.short_desc, b.long_desc, b.logo_path, b.marker_path, b.date_created, b.facebook_path, b.linkedin_path, b.twitter_path, b.googleplus_path, 
                       a.address_id, a.country, a.city, a.street, a.zip_code, a.latitude, a.longitude, 
                       c.category_id, c.category_name, c.description,
                       b.creator_id
                FROM business b
                INNER JOIN address a ON ( b.business_id = a.business_id ) 
                INNER JOIN category c ON ( c.category_id = b.category_id ) 
                WHERE b.business_id =?";
        $parameters = array($this->business_id);
        $result = $this->_db->query($sql, $parameters);
        
       if($result){
           $this->business_name = $result->result()[0]->business_name;
           $this->email = $result->result()[0]->email;
           $this->mobile = $result->result()[0]->mobile;
           $this->landline = $result->result()[0]->landline;
           $this->short_desc = $result->result()[0]->short_desc;
           $this->long_desc = $result->result()[0]->long_desc;
           $this->logo_path = $result->result()[0]->logo_path;
           $this->marker_path = $result->result()[0]->marker_path;
           $this->date_created = $result->result()[0]->date_created;
           $this->facebook = $result->result()[0]->facebook_path;
           $this->linkedin = $result->result()[0]->linkedin_path;
           $this->twitter = $result->result()[0]->twitter_path;
           $this->google = $result->result()[0]->googleplus_path;
           $this->creator_id = $result->result()[0]->creator_id;
           
           $country = $result->result()[0]->country;
           $city = $result->result()[0]->city;
           $street = $result->result()[0]->street;
           $zip_code = $result->result()[0]->zip_code;
           $lon = $result->result()[0]->longitude;
           $lat = $result->result()[0]->latitude;
           
           $this->address = new Address($country, $city, $street, $zip_code, $lon, $lat);
           $this->address->address_id = $result->result()[0]->address_id;
           
           $category_name = $result->result()[0]->category_name;
           $description = $result->result()[0]->description;
           $this->category = new Category($category_name, $description);
           $this->category->category_id = $result->result()[0]->category_id;
            
           return $this;
       }
       
        
    }
    
    public function getDays($num){
        switch ($num) {
            case 1: return "Monday";
                break;
            case 2: return "Tuesday";
                break;
            case 3: return "Wednesday";
                break;
            case 4: return "Thursday";
                break;
            case 5: return "Friday";
                break;
            case 6: return "Saturday";
                break;
            case 7: return "Sunday";
                break;

            default:
                break;
        }   
    }
    
     public function getBusinessHours()
    {
        $sql = "SELECT day , open , close FROM opening_hours WHERE business_id =?";
        $parameters = array($this->business_id);
        $result = $this->_db->query($sql, $parameters);
        
        $this->business_hour = array();
        
        $mon="CLOSED";
        $tue="CLOSED";
        $wed="CLOSED";
        $thu="CLOSED";
        $fri="CLOSED";
        $sat="CLOSED";
        $sun="CLOSED";
        
        if($result){
           
        foreach ($result->result() as $key => $value) {  
            
               $open = date( 'H:i', strtotime($value->open) );
               $close = date( 'H:i', strtotime($value->close) );
               
            switch ($value->day) {
            case 1: $mon= $open.' - '.$close;
                break;
            case 2: $tue= $open.' - '.$close;
                break;
            case 3: $wed= $open.' - '.$close;
                break;
            case 4: $thu= $open.' - '.$close;
                break;
            case 5: $fri= $open.' - '.$close;
                break;
            case 6: $sat= $open.' - '.$close;
                break;
            case 7: $sun= $open.' - '.$close;
                break;

            default:
                break;
        }   
            
            
                
        }   
          
           //  echo $mon."<br>".$tue."<br>".$wed."<br>".$thu."<br>".$fri."<br>".$sat."<br>".$sun."<br>";
             echo '<div class="col-md-3">
                        <p class="title">Monday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">'.$mon.'</p>                      
                    </div>
                     
                     <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Tuesday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">'.$tue.'</p>                      
                    </div>
                     
                      <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Wednesday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">'.$wed.'</p>                      
                    </div>
                      
                      <div class="clearfix"></div><hr>
                      
                    <div class="col-md-3">
                        <p class="title">Thursday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">'.$thu.'</p>                      
                    </div>
                     
                      <div class="clearfix"></div><hr>
                      
                    <div class="col-md-3">
                        <p class="title">Friday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">'.$fri.'</p>                      
                    </div>
                     
                      <div class="clearfix"></div><hr>
                    <div class="col-md-3">
                        <p class="title">Saturday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">'.$sat.'</p>                      
                    </div>
                     
                      <div class="clearfix"></div><hr>
                    
                      <div class="col-md-3">
                        <p class="title">Sunday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">'.$sun.'</p>                      
                    </div>
                     ';
        
          
       }
      
    }
    
    public function addAddress($address)
    {   //$this->address = $address;   
        $sql = "INSERT INTO address ( business_id, city, country, street, zip_code, latitude, longitude ) VALUES (?,?,?,?,?,?,?)";
        $parameters = array($this->business_id, $address->city, $address->country, $address->street, $address->zip_code, $address->latitude, $address->longitude);
        $result = $this->_db->query($sql, $parameters);
        return $result->last_inserted_id;      
    }
    
     public function addBusinessHours($business_hours)
    {   //$this->address = $address;   
        $sql = "INSERT INTO opening_hours ( business_id, day, open, close ) VALUES (?,?,?,?)";  
        $parameters = array($this->business_id, $business_hours->day, $business_hours->open, $business_hours->close);
        $result = $this->_db->query($sql, $parameters);
        return $result->last_inserted_id;      
    }
    
    public function addDescriptions()
    {
        $sql = "UPDATE business SET short_desc='$this->short_desc',long_desc='$this->long_desc'  WHERE business_id=?";
        $parameters = array($this->business_id);
        $result = $this->_db->query($sql, $parameters);
       
        if($result->count()){
            return true;
        }
        else
        {
            return false;
        }
    }
    
     public function addContacts()
    {
        $sql = "UPDATE business SET date_created=NOW(), email='$this->email',mobile='$this->mobile',landline='$this->landline',facebook_path='$this->facebook',twitter_path='$this->twitter',linkedin_path='$this->linkedin',googleplus_path='$this->google' WHERE business_id=?";
       
        $parameters = array($this->business_id);
        $result = $this->_db->query($sql, $parameters);
        
        if($result->count()){
            return true;
        }
        else
        {
            return false;
        }
    }
    
    
      public function addLogoPath()
    {
        $sql = "UPDATE business SET logo_path='$this->logo_path' WHERE business_id=?";
        $parameters = array($this->business_id);
        $result = $this->_db->query($sql, $parameters);
       
        if($result->count()){
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function loadStoreDetails()
    {  
        
    }
    
     
}