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
                        
                         Session::flash('error', "The user is already an editor."); 
                         
                         Redirect::to('../editors.php');
                   }
                   else{
                       if($editor->add()>0){
                           Session::flash('success', "Editor added successfully"); 
                           Redirect::to('../editors.php');
                       } 
                        else {
                                Session::flash('error', "Error adding editor."); 
                                Redirect::to('../editors.php');
                        }
                   }
              
               }
               else
               {
                  // $_SESSION['error'] = "The email you entered is not present in the database.";
                   Session::flash('error', "The email you entered is not present in the database."); 
                   
                   Redirect::to('../editors.php');
                   
               }
                      
               
               
              
            /*   if($business->addContacts())
               {
                  
                  Redirect::to('../dashboard.php');
               }
               else {
                       echo "Fail";exit;
                       Redirect::to('../create_store_contact.php');
               }
               */
               
            }
            else
            {
               
                $errors='';
                foreach ($validation->errors() as $error ) {
                    $errors .= $error." </br>";
                }
                 Session::flash('validation-errors', $errors);
                 Redirect::to('../editors.php');
            }
    
}else
{ 
    
     Redirect::to('../editors.php');
}
    
}
else
{
  
   Redirect::to('../editors.php');
}
