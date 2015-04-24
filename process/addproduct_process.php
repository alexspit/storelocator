<?php

require_once '../core/init.php';

    
if(Input::exists())
{
    if(Token::check(Input::get('token'))){//protection against CSRF
            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'product_name' => array(
                    'required' => true,
                    'min' => 2                   
                ),
                'product_price' => array(
                    'required' => true,
                    'isnumeric' => true                   
                )
            ));
             
            if($validation->passed())
            {  
                $business = new Business();
                $business->business_id = Input::get("id");
                $business = new Business($business->business_id);
                
               
                
              //  echo "<pre>";
               
                $product = new Product();
                $product->business_id = $business->business_id;
                $product->category_id = $business->category->category_id;
                $product->product_name = Input::get("product_name");
                $product->price = Input::get("product_price");
                $product->description = Input::get("description");
                
              //  var_dump($product);
              //  echo "</pre>";exit;

                if($product->add()>0){
                    
                           Session::flash('product-success', "Product added successfully");
                           Redirect::to('../products.php');
                       } 
                        else {
                                Session::flash('error', "Failed to add product.");
                                  Redirect::to('../products.php');
                        }
               
               
    }  
            
            else
            {
               
                $errors='';
                foreach ($validation->errors() as $error ) {
                    $errors .= $error." </br>";
                }
                 Session::flash('validation-errors', $errors);
                   Redirect::to('../products.php');
            }
    
}else
{ 
    
       Redirect::to('../products.php');
}
    
}
else
{
   
     Redirect::to('../products.php');
}
