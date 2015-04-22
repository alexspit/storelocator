<?php

require_once '../core/init.php';

    
if(Input::exists())
{
    if(Token::check(Input::get('token'))){//protection against CSRF
            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'email' => array(
                    'required' => true,
                    'isemail' => true                   
                ),               
                'url' => array(
                    'required' => true,
                    'min' => 5
                ),
                'mobile' => array(
                    'required' => true,
                    'min' => 8
                ),
                'landline' => array(
                    'required' => true,
                    'min' => 8
                )
            ));
             
            if($validation->passed())
            {                
               $business = new Business();
               $business->business_id = Input::get("id");
               $business->email = Input::get("email");
               $business->mobile = Input::get("mobile");
               $business->landline = Input::get("landline");
               $business->facebook = Input::get("facebook");
               $business->twitter = Input::get("twitter");
               $business->linkedin = Input::get("linkedin");
               $business->google = Input::get("googleplus");
               
              
               if($business->addContacts())
               {
                  
                  Redirect::to('../dashboard.php');
               }
               else {
                       echo "Fail";exit;
                       Redirect::to('../create_store_contact.php');
               }
               
               
            }
            else
            {
                echo "Errors";exit;
                $errors='';
                foreach ($validation->errors() as $error ) {
                    $errors .= $error." </br>";
                }
                 Session::flash('validation-errors', $errors);
                 Redirect::to('../create_store_contact.php');
            }
    
}else
{ 
    echo "Token";exit;
     Redirect::to('../create_store_contact.php');
}
    
}
else
{
   echo "Input";exit;
   Redirect::to('../create_store_info.php');
}
