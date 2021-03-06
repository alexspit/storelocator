<?php

class Input{
    
    //Checks if a post request has been made and that data has been submitted
    public static function exists($type = 'post')
    {
        switch ($type) {
            case 'post':
                    return (!empty($_POST))? true : false;
                break;
            case 'get':
                    return (!empty($_GET))? true : false;
                break;
            default:
                    return false;
                break;
        }
    }
    
    //Returns the requested post or get data
    public static function get($item){
        if(isset($_POST[$item])){
            return escape($_POST[$item]);
        }
        else if(isset($_GET[$item])){
            return escape($_GET[$item]);
        }
        return '';
    }
    
    
}