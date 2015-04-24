<?php

require_once '../core/init.php';

    
if(Input::exists())
{
    if(Token::check(Input::get('token'))){//protection against CSRF
            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'shortdesc' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 100
                )
            ));
             
            if($validation->passed())
            {
                $opening_hours = array();
                if (isset($_POST['monday_check'])) {                 
                    $opening_hours[0] = new Business_Hour(1,Input::get("monday_open_1"), Input::get("monday_close_1"));                
                }
                if (isset($_POST['tuesday_check'])) {                 
                    $opening_hours[1] = new Business_Hour(2,Input::get("tuesday_open_1"), Input::get("tuesday_close_1"));                
                }
                if (isset($_POST['wednesday_check'])) {                 
                    $opening_hours[2] =  new Business_Hour(3,Input::get("wednesday_open_1"), Input::get("wednesday_close_1"));                
                }
                 if (isset($_POST['thursday_check'])) {                 
                    $opening_hours[3] =  new Business_Hour(4,Input::get("thursday_open_1"), Input::get("thursday_close_1"));                
                }
                if (isset($_POST['friday_check'])) {                 
                    $opening_hours[4] =  new Business_Hour(5,Input::get("friday_open_1"), Input::get("friday_close_1"));                
                }
                if (isset($_POST['saturday_check'])) {                 
                    $opening_hours[5] =  new Business_Hour(6,Input::get("saturday_open_1"), Input::get("saturday_close_1"));                
                }
                if (isset($_POST['sunday_check'])) {                 
                    $opening_hours[6] =  new Business_Hour(7,Input::get("sunday_open_1"), Input::get("sunday_close_1"));                
                }

               $business = new Business();
               $business->business_id = Input::get("id");
               $business->short_desc = Input::get("shortdesc");
               $business->long_desc = Input::get("longdesc");
               
              $result=0;
              
             
               foreach ($opening_hours as $value) {
                   
                 $result += $business->addBusinessHours($value);
               }
               
               
               if($result)
               {
                   if($business->addDescriptions())
                   {
                        Session::flash('info-success', "Data input successfully. Please enter your store's contact details to finish.");
                        Redirect::to('../create_store_contact.php?id='.$business->business_id);
                   }
                    else {
                        Session::flash('info-error', "Error adding descriptions.");
                        Redirect::to('../create_store_info.php');
                    }
               }
               else{
                   Session::flash('info-error', "Please enter your business hours.");
                   Redirect::to('../create_store_info.php');
               }
               
              
               
            }
            else
            {
                
                $errors='';
                foreach ($validation->errors() as $error ) {
                    $errors .= $error." </br>";
                }
                 Session::flash('validation-errors', $errors);
                 Redirect::to('../create_store_info.php');
            }
    
}else
{ 
    echo "Token";exit;
     Redirect::to('../create_store_info.php');
}
    
}
else
{
   echo "Input";exit;
   Redirect::to('../create_store_info.php');
}
