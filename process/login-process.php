<?php

require_once '../core/init.php';

if(Input::exists())//Check if form has been submitted
{ 
  // if(Token::check(Input::get('token'))){//protection against CSRF
        
         $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'email' => array(
                    'required' => true,
                    'isemail' => true
                    ),
                'password' => array(
                    'required' => true
                   )
            ));
            
           
                
                if($validation->passed()){
                $user = new User();
                              
                $login = $user->login(Input::get('email'), Input::get('password'));
                
                if($login){   
                    if($user->hasBusiness()){
                        Session::flash('login-success', 'Log in successful.');
                        Redirect::to('../dashboard.php');
                    }
                    else{
                         Session::flash('login-success', 'Log in successful. Please create a new Store to begin.');
                        Redirect::to('../create_store_location.php');
                    }
                    
                }
                else{
                    Session::flash('login-error', 'Failed to log in, incorrect username or password.');
                    Redirect::to('../register.php');
                }
            }
            else{
                $errors='';
                foreach ($validation->errors() as $error ) {
                    $errors .= $error." </br>";
                }
                 Session::flash('validation-errors', $errors);
               
                 Redirect::to('../login.php');
                 
            }
        

     //        } 
   /// else{
   //     Redirect::to('../register.php');
   // }
            
}
else{
     Redirect::to('../register.php');
}