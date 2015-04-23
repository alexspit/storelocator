<?php
class Editor{
    
    public $editor_id, 
           $user_id,
           $business_id,
           $access_level,
           $date_created;

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
    
       public function add()
    {
        $sql = "INSERT INTO editor ( business_id, user_id, access_level, date_created )VALUES (?,?,?, NOW())";
        $parameters = array($this->business_id,$this->user_id, $this->access_level);
        $result = $this->_db->query($sql, $parameters);
        return $result->last_inserted_id;
    }
    

}