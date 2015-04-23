   <?php require_once("masterpage/header.php");
        
        $user = new User();
        if(!$user->isLoggedIn()){
            Redirect::to('register.php');
        }
        
       // $business_id = $user->getBusiness();
        if(Input::exists('get'))
        { 
            $review_id = Input::get("id");              
        }
        
        echo $review_id;
        
        $review = new Review();
        $review->review_id = $review_id;
        
    /*    
        if(Input::exists('get'))
        { 
            $business_id = Input::get("id");              
        }
        
        $business = new Business($business_id);
        //$business->getBusinessHours();
        
       $review = new Review();
        $review->business_id = $business_id;
       
        
        $avgrating = $review->getAverageRating();
       
       // $review->getStars($avgrating);
        */
        
        ?>

        
	<main>
            <div class="breadcrumb-wrap">
		<div class="container">
                    <div class="row">
			<div class="col-sm-6">
                            <h4>Reviews and Ratings</h4>
                        </div>
			<div class="col-sm-6 hidden-xs text-right">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Reviews</li>
                                
                            </ol>
                        </div>
                    </div>
		</div>
            </div><!--breadcrumbs-->
            <div class="divide20"></div>
            

			
            <div class="container" id="reviews">
                <div id="reviewdetails">
                <div class="row" >
                    <div class="col-md-9">
                        <br>
                        <h2 style="padding-left:20px;">Review Details</h2>
                    </div>
                    
                    
                   
                </div>
                    
                    <?php $review->populateReviewDetails();?>
   
                    
                </div>
                
           
              
            </div>
            
            
  
	</main><!--END MAIN-->
        
        
          
		
        <?php require_once("masterpage/footer.php")?>
