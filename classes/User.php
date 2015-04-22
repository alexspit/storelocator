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
}