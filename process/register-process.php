<?php

require_once '../core/init.php';

if(Input::exists())
{
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
                      Session::flash('registration-success', 'Registration successful, please log in. ');
                      Redirect::to('../register.php');
                    }        
                        
               }catch(Exception $e){
                 Session::flash('exception', $e->getMessage());
                 Redirect::to('../register.php?action=register');
               }
            }
            else
            {
                $errors='';
                foreach ($validation->errors() as $error ) {
                    $errors .= $error." </br>";
                }
                 Session::flash('registration-errors', $errors);
                 Redirect::to('../register.php?action=register');
            }
    
}else
{ 
    Redirect::to('../register.php?action=register');
}
    
}
else
{
    Redirect::to('../register.php?action=register');
}
