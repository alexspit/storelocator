<?php

require_once '../core/init.php';

    
if(Input::exists('get'))
{
    $user = new User();
        
    $editor = new Editor();
    $editor->business_id = Input::get('id');
    $editor->user_id = $user->data()->user_id;
    
   // echo $editor->getAccess();
    
    Session::put('access',$editor->getAccess());
        
    
    Redirect::to("../dashboard.php?id=$editor->business_id");
        
            

  
}
else
{
  
   Redirect::to('../editors.php');
}
