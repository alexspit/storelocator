

<?php
class Review{
    
    public $rater_id,
           $rater_name,
           $rater_email,
           $review,
           $rating,
           $date_reviewed,
           $review_id,
           $responder_name,
           $response,
           $date_responded;
           

    private $_db;
            
    
    public function __construct() {
        $this->_db = DB::getInstance();  
        
           
    }
    
     public function populate()
    {
        $sql = "SELECT u.name, u.email, r.rating_id, r.value, r.review, r.date_rated, r.status
                FROM rating r
                INNER JOIN business b ON ( b.business_id = r.business_id ) 
                INNER JOIN user u ON ( u.user_id = r.rater_id ) 
                WHERE b.business_id =?
                ORDER BY r.date_rated DESC";
        $parameters = array($this->business_id);
    
        $result = $this->_db->query($sql, $parameters);
        
       if($result->count()){
           //var_dump($result);exit;
           foreach ($result->result() as $value) {   
               
               $status = "";
               $modal = "";
               if($value->status == "0")
               {
                    $status = "New";
                    $modal = "reviews_respond";
               }
               else if ($value->status == "1")
               {
                    $status = "Responded";
                    $modal = "reviews_details";
               }
               
               
               
               
               
               
               echo ' <div class="row reviews" id="review_'.$value->rating_id.'">
                        <div class="col-md-2">
                            <p class="details">'.$value->name.'</p>  
                        </div>
                        <div class="col-md-2">
                            <div id="starrating_details" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rating: '.$value->value.'">
                                '.$this->getStars($value->value).'
                            </div>   
                        </div>
                        <div class="col-md-4">
                            <p class="details">'.substr($value->review,0,150).'</p> 
                        </div>
                        <div class="col-md-2">
                             <p class="details">'.$status.'</p> 
                        </div>
                        <div class="col-md-2">
                            <a href="'.$modal.'.php?id='.$value->rating_id.'"><button type="button" class="btn btn-theme-dark">Details</button></a>
                        </div>
                        
                         <div class="clearfix"></div><hr>
                    </div>';
                
           }
       }
       else
       {
           echo "no"; 
       }
       
    }
    
     public function populateReviewDetails()
    {
        $sql = "SELECT ur.name as rater_name, ur.email as rater_email, us.name as responder_name, r.date_responded, r.response,r.rating_id, r.value, r.review, r.date_rated, r.status
                FROM rating r
                INNER JOIN business b ON ( b.business_id = r.business_id ) 
                INNER JOIN user ur ON ( ur.user_id = r.rater_id ) 
                INNER JOIN user us ON ( us.user_id = r.responder_id ) 
                WHERE r.rating_id =?
                ";
        $parameters = array($this->review_id);
    
        $result = $this->_db->query($sql, $parameters);
        
       if($result->count()){
           //var_dump($result);exit;
           foreach ($result->result() as $value) {   
               $status = "";
               
               if($value->status == "0")
               {
                    $status = "New";
                    
               }
               else if ($value->status == "1")
               {
                    $status = "Responded";
                   
               }
              
               echo '<div class="container-fluid">
            <div class="row">
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Reviewer Name:</label>
               <p class="details">'.$value->rater_name.'</p>
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Rating:</label>
               <div id="starrating_details">
                                '.$this->getStars($value->value).' ('.$value->value.')
                            </div>  
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Review Date:</label>
               <p class="details"> '.$value->date_rated.' </p>
              </div>
              
            </div>
               
            <div class="row">
              <div class="col-sm-12">
               <label for="product_name" class="control-label">Review:</label>
               <p class="details">'.$value->review.'</p>
              </div>                          
            </div>      
               <hr>
               
            <div class="row">
                <div class="col-sm-4">
               <label for="product_name" class="control-label">Status:</label>
               <p class="details">'.$status.' </p>
             
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Responder Name:</label>
               <p class="details">'.$value->responder_name.' </p>
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Response Date:</label>
               <p class="details">'.$value->date_responded.' </p>
             
              </div>
              
              
            </div>
               
            <div class="row">
              <div class="col-sm-12">
               <label for="product_name" class="control-label">Response:</label>
               <p class="details">'.$value->response.'</p>
              </div>                          
            </div>    
          
        
               <a class="btn btn-theme-dark pull-right" href="mailto:'.$value->rater_email.'">Email Reviewer</a>
             <a href="reviews.php" style="margin-bottom: 10px; margin-left: 10px" class="btn btn-theme-dark pull-left">Back</a>
           </div>';
                
           }
       }
       else
       {
           echo "no"; 
       }
       
    }
    
     
     public function populateReviewResponse()
    {
        $sql = "SELECT u.name, u.email, r.date_responded, r.response,r.rating_id, r.value, r.review, r.date_rated, r.status
                FROM rating r
                INNER JOIN business b ON ( b.business_id = r.business_id ) 
                INNER JOIN user u ON ( u.user_id = r.rater_id ) 
                
                WHERE r.rating_id =?
                ";
        $parameters = array($this->review_id);
    
        $result = $this->_db->query($sql, $parameters);
        
       if($result->count()){
           //var_dump($result);exit;
           foreach ($result->result() as $value) {   
               
               echo '<div class="container-fluid">
            <div class="row">
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Reviewer Name:</label>
               <p class="details">'.$value->name.'</p>
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Rating:</label>
               <div id="starrating_details">
                                '.$this->getStars($value->value).' ('.$value->value.')
                            </div>  
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Review Date:</label>
               <p class="details"> '.$value->date_rated.' </p>
              </div>
              
            </div>
               
            <div class="row">
              <div class="col-sm-12">
               <label for="product_name" class="control-label">Review:</label>
               <p class="details">'.$value->review.'</p>
              </div>                          
            </div>      
               

            <form action="process/response_process.php" method="post" id="responseform">
         
          <div class="form-group">
            <label for="editor_comment" class="control-label">Response</label> 
            <textarea rows="5" class="form-control" id="editor_comment"></textarea>
             <input type="hidden" name="review_id" value="'.$this->review_id.'">
          </div>
             <a class="btn btn-theme-dark pull-left" href="mailto:'.$value->email.'">Send an email instead</a>
             <a href="reviews.php" style="margin-bottom: 10px; margin-left: 10px" class="btn btn-theme-dark pull-left">Back</a>
        
             <button type="submit" class="btn btn-theme-dark pull-right">Respond</button>
        </form> 
            
        
          
        
           </div>';
                
           }
       }
       else
       {
           echo "no"; 
       }
       
    }
    
     public function getAverageRating()
    {
        $sql = "SELECT AVG(value) as avg FROM rating WHERE business_id=?";
        $parameters = array($this->business_id);
    
        $result = $this->_db->query($sql, $parameters);
        
       if($result->count()){
           //var_dump($result);exit;
           foreach ($result->result() as $value) {                     
                return round($value->avg,1);
                
           }
       }
       else
       {
           echo "no"; 
       }
       
    }
    
    
     public function getStars($rating)
    {
       $stars="";
            
            for ($i = 1; $i <= 5; $i++) {
                
                 if($i<=$rating){
                      $stars .= '<i class="fa fa-star" ></i>';
                    
                 }
                 else{
                     
                     if ($i-$rating >= 1){
                        $stars .= '<i class="fa fa-star-o" ></i>'; 
                     }
                     else
                     {
                          $stars .= '<i class="fa fa-star-half-full" ></i>';
                     }
                     
                 }
              
            }
           
            
        
      return $stars;
        
       
    }
    
    

}