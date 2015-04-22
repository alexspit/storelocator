<?php

require_once '../core/init.php';

//var_dump(Token::check(Input::get('token')));

    
if(Input::exists())
{
    //echo "exists";
    
    
    if(Token::check(Input::get('token'))){//protection against CSRF
            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'name' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 50
                ),
                'surname' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 50
                ),
                'email' => array(
                    'required' => true,
                    'isemail' => true,
                    'min' => 5,
                    'unique' => 'user'
                ),
                'password' => array(
                    'required' => true,
                    'min' => 6       
                ),
                'confirm_password' => array(
                    'required' => true,
                    'matches' => 'password' 
                )
            ));

            
            if($validation->passed())
            {
                
               
               $user = new User();
               
               $salt = Hash::salt(64);
               
               
               try{
                   
                 $result =  $user->create(array(
                       'name' => Input::get('name'),
                       'surname' => Input::get('surname'),
                       'email' => Input::get('email'),
                       'password' => Hash::make(Input::get('password'), $salt),
                       'salt' => $salt,
                       'date_registered' => date('Y-m-d H:i:s'),
                       'account_type' => 1                      
                       ));
                   
                   if($user){
                        
                      Redirect::to('../dashboard.php');
                    }        
                        
               }catch(Exception $e){
                 Session::flash('exception', $e->getMessage());
                 Redirect::to('../register.php');
               }
            }
            else
            {
                $errors='';
                foreach ($validation->errors() as $error ) {
                    $errors .= $error." </br>";
                }
                 Session::flash('validation-errors', $errors);
                 Redirect::to('../register.php');
            }
    
}else
{ 
    Redirect::to('../register.php');
}
    
}
else
{
    Redirect::to('../register.php');
}
