<?php

require_once '../core/init.php';

    
if(Input::exists())
{
    if(Token::check(Input::get('token'))){//protection against CSRF
            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'business_name' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 50
                ),               
                'city' => array(
                    'required' => true,
                    'min' => 2
                ),
                'street' => array(
                    'required' => true,
                    'min' => 2
                ),
                'lat' => array(
                    'required' => true,
                    'numeric' => true
                ),
                'lng' => array(
                    'required' => true,
                    'numeric' => true
                )
            ));

    
            if($validation->passed())
            {
              
               $business = new Business();
               $business->business_name = Input::get('business_name');
               $business->category_id = Input::get('category');
               $business->creator_id = Input::get('creator_id');
               
               $insertedID = $business->create();
               
               
               
               if( $insertedID>0){
                   $business->business_id = $insertedID;
               
               
               $result = $business->addAddress(new Address(Input::get('country'),
                                                 Input::get('city'),
                                                 Input::get('street'),
                                                 Input::get('zip'),
                                                 Input::get('lat'),
                                                 Input::get('lng'))); 
                
                if($result>0){
                    Session::flash('location-success', "Your store page is being creating, please fill in the following details.");
                    Redirect::to('../create_store_info.php?id='.$business->business_id );
                }
                else{
                    Session::flash('location-error', "Error creating Address.");
                    Redirect::to('../create_store_location.php');
                }
                    
               }else
               {
                   Session::flash('location-error', "Error creating Business.");
                   Redirect::to('../create_store_location.php');
               }
                
            
            }
            else
            {
                $errors='';
                foreach ($validation->errors() as $error ) {
                    $errors .= $error." </br>";
                }
                 Session::flash('validation-errors', $errors);
                 Redirect::to('../create_store_location.php');
            }
    
}else
{ 
    
     Redirect::to('../create_store_location.php');
}
    
}
else
{
   
     Redirect::to('../create_store_location.php');
}
