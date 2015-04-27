<?php

require_once '../core/init.php';

    
if(Input::exists())
{
    if(Token::check(Input::get('token'))){//protection against CSRF
            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'response' => array(
                    'required' => true            
                )
                
            ));
             
            if($validation->passed())
            {  
                $user = new User();
               
                $review = new Review();
                $review->review_id = Input::get("review_id");
                $review->responder_id = $user->data()->user_id;
                $review->response =  Input::get("response");
                
                if($review->addResponse()){
                    Session::flash('success', "Response sent.");
                    Redirect::to('../reviews.php');
                }
                else{
                    
                   Session::flash('error', "Error sending response.");
                        Redirect::to('../reviews_respond.php?id='.Input::get("review_id"));
                }
             }  
            
            else
            {
                
                $errors='';
                foreach ($validation->errors() as $error ) {
                    $errors .= $error." </br>";
                }
                 Session::flash('validation-errors', $errors);
                       Redirect::to('../reviews_respond.php?id='.Input::get("review_id"));
            }
    
}else
{ 
    
      Redirect::to('../reviews.php');
}
    
}
else
{
   
    Redirect::to('../reviews.php');
}
