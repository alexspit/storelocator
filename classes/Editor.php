<?php
class Editor{
    
    public $editor_id, 
           $user_id,
           $editor_name,
           $editor_email,
           $business_id,
           $access_level,
           $date_created;
    
    public $permission = array(1=>"Can Manage Products", 2=>"Can Manage Reviews", 3=>"Can Manage Editors", 4=>"All");

    private $_db;
            
    
    public function __construct() {
        $this->_db = DB::getInstance();  
        
          
    }
    
    public function getIDFromEmail($email)
    {
       $sql = "SELECT user_id FROM user WHERE email=?";
       $parameters = array($email);
        
        $result = $this->_db->queryAssoc($sql, $parameters);
      
        if ($result->result())
        {
            return (int)$result->result()[0]['user_id'];
        }
        else
        {
            return 0;
        }
    }
    
    public function getAccess(){
        $sql = "SELECT access_level
                FROM editor 
                WHERE business_id = ? AND user_id=? ";
        $parameters = array($this->business_id, $this->user_id);
    
        $result = $this->_db->query($sql, $parameters);
       
       if($result->count()){
           //var_dump($result);exit;
           foreach ($result->result() as $value) {
            
            
            return $value->access_level;
           }
           
           
          
        
       }
       else
       {
           return 0;
       }
    }
    
    public function isAlreadyEditor()
    {
       $sql = "SELECT COUNT(*) AS count FROM editor WHERE business_id=? AND user_id=?";
       $parameters = array($this->business_id, $this->user_id);
        
        $result = $this->_db->queryAssoc($sql, $parameters);
      
        if ((int)$result->result()[0]['count']>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function getEditorBusiness()
    {
         $sql = "SELECT b.business_id, b.business_name, e.access_level, e.date_created
                FROM editor e              
                INNER JOIN business b ON ( b.business_id = e.business_id ) 
                WHERE e.user_id = ? ";
         
        $parameters = array($this->user_id);
    
        $result = $this->_db->query($sql, $parameters);
        
       if($result->count()){
           
           foreach ($result->result() as $value) {
           //    echo "<a href='../dashboard.php?id=$value->business_id'>$value->business_name</a><br>";
              
               echo ' <div class="row" id="storedetails">
                    <div class="col-md-12">
                        <br>
                        <h2>Business Details</h2>                      
                    </div>
  

                    <div class="col-md-3">
                        <p class="title">Business Name</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">'.$value->business_name.'</p>                      
                    </div>
                    
                     <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Access Level</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">'.$value->access_level.'</p>                      
                    </div>
                     
                     <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Granted Access On</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">'.$value->date_created.'</p>                      
                    </div>
                     
                     <div class="col-md-12">
                        <a style="margin-right:20px; margin-bottom: 20px;" href="dashboard.php?id='.$value->business_id.'" class="btn btn-lg btn-theme-dark pull-right" >Go</a>
                            
                                  
                    </div>
                     
                </div>';
               }
     }
    }
    
     public function populate()
    {
        $sql = "SELECT u.user_id, u.name, u.email, e.access_level, e.date_created
                FROM editor e
                INNER JOIN user u ON ( u.user_id = e.user_id ) 
                INNER JOIN business b ON ( b.business_id = e.business_id ) 
                WHERE b.business_id = ? ";
        $parameters = array($this->business_id);
    
        $result = $this->_db->query($sql, $parameters);
        
       if($result->count()){
           //var_dump($result);exit;
           foreach ($result->result() as $value) {
            
            
            echo '<div class="row editors" id="'.$value->user_id.'">
                        <div class="col-md-3">
                            <p class="details">'.$value->name.'</p>  
                        </div>
                        <div class="col-md-3">
                            <p class="details">'.$value->email.'</p>    
                        </div>
                        <div class="col-md-3">
                            <p class="details">'.$value->access_level.'</p> 
                        </div>
                        <div class="col-md-3">
                            <p class="details">'.$value->date_created.'
                            </p>  
                        </div>
                        
                         <div class="clearfix"></div><hr>
                    </div>';
           }
           
           
          
        
       }
       else
       {
            echo '<div class="row">
                        <div class="col-md-12">
                               <p class="details" style="margin-left:20px;"> No Editors added yet.</p>  
                        </div>
                        
                        
                    </div>'; 
       }
       
    }
    
    public function add()
    {
        $sql = "INSERT INTO editor ( business_id, user_id, access_level, date_created )VALUES (?,?,?, NOW())";
        $parameters = array($this->business_id,$this->user_id, $this->access_level);
        $result = $this->_db->query($sql, $parameters);
        return $result->last_inserted_id;
    }

}