<?php

class User{
    
    private $_db,
            $_data,
            $_sessionName,
            $_isLoggedIn;
    
    
    public function __construct($user = null) {
        $this->_db = DB::getInstance();
        
        $this->_sessionName = Config::get('session/session_name');
       
        if(!$user){

            if(Session::exists($this->_sessionName)){
                
                $user = Session::get($this->_sessionName);
                 
                if($this->find($user)){
                   
                    $this->_isLoggedIn = true;
                }else{
                    //process logout
                }
            }
        }
        else{
            $this->find($user);
        }
            
    }
    
    public function create($fields = array()){
        $result = $this->_db->insert('user', $fields);
        if($result == FALSE){
            throw new Exception("Error registering new user.");
        
        }else{
        
        return $result;}
    }
    
    public function find($user = null){
        if($user){
            
            $field = (is_numeric($user)) ? 'user_id' : 'email';
            
            //var_dump($user); exit();
            $data = $this->_db->get('user', array($field, '=', $user));
            
            if($data->count()){
                              
                $this->_data = $data->first();
            
                
                return true;
            }
        }
        
        return false;
    }
    
    
    public function login($username = null, $password= null, $remember = false){
        $user = $this->find($username);
        
        if($user){
             if($this->data()->password === Hash::make($password, $this->data()->salt)){
            
                Session::put($this->_sessionName, $this->data()->user_id);
                return true;
            }
        }
        
        return false;
    }
    
   public function logout(){
        
         Session::delete($this->_sessionName);
         
    }
    
   
    
    public function data(){
        return $this->_data;
    }
    public function isLoggedIn()
    {
       return $this->_isLoggedIn; 
    }
    
    public function hasBusiness()
    {
       $sql = "SELECT COUNT(*) AS count FROM business WHERE creator_id=?";
       $parameters = array($this->data()->user_id);
        
        $result = $this->_db->queryAssoc($sql, $parameters);
      
        if ((int)$result->result()[0]['count'] > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
     public function isEditor()
    {
         
       $sql = "SELECT COUNT(*) AS count FROM editor WHERE user_id=?";
       $parameters = array($this->data()->user_id);
        
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
    
    public function getBusiness()
    {
       $sql = "SELECT business_id FROM business WHERE creator_id=?";
     
       $parameters = array($this->data()->user_id);
        
        $result = $this->_db->queryAssoc($sql, $parameters);
     
        if ($result->result())
        {
            return (int)$result->result()[0]['business_id'];
        }
        else
        {
            return 0;
        }
    }
    
    public function getUserCount()
    {
        $sql = "SELECT COUNT(*) AS count FROM user";
       
        
        $result = $this->_db->queryAssoc($sql);
      
        if ($result)
        {
            return (int)$result->result()[0]['count'];
        }
        else
        {
            return false;
        }
    }
    
    public function getStoreCount()
    {
        $sql = "SELECT COUNT(*) AS count FROM business";
     
        
        $result = $this->_db->queryAssoc($sql);
      
        if ($result)
        {
            return (int)$result->result()[0]['count'];
        }
        else
        {
            return false;
        }
    }
    
    public function getProductCount()
    {
        $sql = "SELECT COUNT(*) AS count FROM product";
      
        
        $result = $this->_db->queryAssoc($sql);
      
        if ($result)
        {
            return (int)$result->result()[0]['count'];
        }
        else
        {
            return false;
        }
    }
    
    
     
}