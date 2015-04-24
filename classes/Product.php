<?php
class Product{
    
    public $category_id,
           $category_name,
           $product_id,
           $product_name,
           $price,
           $business_id,
           $description;
           

    private $_db;
            
    
    public function __construct() {
        $this->_db = DB::getInstance();  
        
           
    }
    
     public function populate()
    {
        $sql = "SELECT product_id, product_name, price, description FROM product
                WHERE business_id = ? ";
        $parameters = array($this->business_id);
    
        $result = $this->_db->query($sql, $parameters);
        
       if($result->count()){
           //var_dump($result);exit;
           foreach ($result->result() as $value) {                     
               // echo $value->product_name." ".$value->price;exit;
                echo ' <div class="row products" id="product_'.$value->product_id.'">
                        <div class="col-md-2">
                            <img class="hidden-xs hidden-sm" src="img/img-5.jpg" width="50">
                        </div>
                        <div class="col-md-3">
                            <p class="details">'.$value->product_name.'</p>  
                        </div>
                        <div class="col-md-3">
                            <p class="details">$'.$value->price.'</p>  
                        </div>
                        <div class="col-md-4">
                            <p class="details">'.$value->description.'</p>  
                        </div>
                        
                         <div class="clearfix"></div><hr>
                    </div>';
           }
       }
       else
       {
            echo '<div class="row">
                        <div class="col-md-12">
                               <p class="details" style="margin-left:20px;"> No Products added yet.</p>  
                        </div>
                        
                        
                    </div>'; 
       }
       
    }
    
    public function add()
    {
        $sql = "INSERT INTO product ( product_name, price, description, category_id, business_id )VALUES (?,?,?,?,?)";
        $parameters = array($this->product_name,$this->price, $this->description, $this->category_id, $this->business_id);
        $result = $this->_db->query($sql, $parameters);
        return $result->last_inserted_id;
    }

}