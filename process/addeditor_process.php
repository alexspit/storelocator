<?php

require_once '../core/init.php';

    
if(Input::exists())
{
    if(Token::check(Input::get('token'))){//protection against CSRF
            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'editor_email' => array(
                    'required' => true,
                    'isemail' => true                   
                ),               
                'access_level' => array(
                    'required' => true,
                    'numeric' => true
                ),
                'id' => array(
                    'required' => true,
                    'numeric' => true
                )
            ));
             
            if($validation->passed())
            {  
                $business = new Business();
                $business->business_id = Input::get("id");
                $business = new Business($business->business_id);
                
                
                
               $editor = new Editor();
               $editor->business_id = Input::get("id");
               $editor->user_id = $editor->getIDFromEmail( Input::get("editor_email"));
               $editor->access_level = Input::get("access_level");
               
               if($editor->user_id > 0){//If exists
                   if($editor->isAlreadyEditor())
                   {
                       echo "Already Editor"; exit;
                   }
                   else{
                       if($editor->add()>0){
                           Session::flash('editor_success', "Editor added successfully");  
                       } 
                        else {
                                echo "Add failed"; exit;
                        }
                   }
              
               }
               else
               {
                   echo "No user found"; exit;
               }
                      
               
               
              
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
