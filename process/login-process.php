<?php

require_once '../core/init.php';

if(Input::exists())//Check if form has been submitted
{
    if(Token::check(Input::get('token'))){//protection against CSRF
        
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
                
				 if(!(Input::get('email') == "j.debono@mdx.ac.uk" || Input::get('email') == "admin@kloudyhosting.com" || Input::get('email') == "testuser@kloudyhosting.com" || Input::get('email') == "aspiteri6@gmail.com"))
                {
                    Session::flash('login-error', 'Kloudy is currently restricted to beta testers only. Ask <a href="mailto:admin@kloudyhosting.com?Subject=Beta%20Tester" target="_top">Admin</a> to become a beta tester.');
                    Redirect::to('../login.php');
                }
                
                $user = new User();
                
               
                $login = $user->login(Input::get('email'), Input::get('password'));
              
                if($login){
                    //echo "Success";
                     //var_dump(Session::get("verify-id")); var_dump(Session::get("verify-security-token"));exit;
                    
                    if(Session::exists("verify-id") && Session::exists("verify-security-token"))
                    {
                        $path = "../verify.php?id=".Session::get("verify-id")."&security_token=".Session::get("verify-security-token");
                       
                        Session::delete("verify-id");
                        Session::delete("verify-security-token");  
                        
                       Redirect::to($path);
                    }
                    else{
                    Session::flash('login-success', 'Log in successful.');
                    
                   // $user = $user->find(Input::get('email'));
                //   $_SESSION['CurrentUser'] = $user->data() ;
                    Redirect::to('../index.php');
                    }
                }
                else{
                    //echo "Failed to login";
                    
                    
                    Session::flash('login-error', 'Failed to log in, incorrect username or password.');
                    
                    //header("Location:../login.php");
                     Redirect::to('../login.php');
                }
            }
            else{
                $errors='';
                foreach ($validation->errors() as $error ) {
                    $errors .= $error." </br>";
                }
                 Session::flash('login-errors', $errors);
               // Session::flash('error', $validation->errors());
                
                //header("Location:../register.php");
                 Redirect::to('../login.php');
            }
        
    } 
}