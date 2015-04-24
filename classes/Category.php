<?php
class Category{
    
    public $category_id, 
           $category_name,
           $description;

    private $_db;
            
    
    public function __construct($category_name=null, $description=null) {
        $this->_db = DB::getInstance();  
        
        $this->category_name = $category_name;
        $this->description = $description;   
    }
    
    public function loadDropDown()
    {
        $sql = "SELECT category_id, category_name FROM category";
        
        $result = $this->_db->query($sql);
        
       if($result){
            echo "<option selected disabled>Category</option>";
            foreach ($result->result() as $key => $value) {   
                 echo "<option value='$value->category_id'>$value->category_name</option>";        
            }     
        }
    }

}