   <?php require_once("masterpage/header.php");
        
        $user = new User();
        if(!$user->isLoggedIn()){
            Redirect::to('register.php');
        }
          if(Input::exists('get'))
        { 
            $review_id = Input::get("id");              
        }
        
      //  echo $review_id;
        
        $review = new Review();
        $review->review_id = $review_id;
   /*     $business_id = $user->getBusiness();
        
        
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
                            <h4>Respond</h4>
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
                
                  <div class="col-md-12 <?php if(Session::exists('validation-errors') || Session::exists('error')){ echo " alert-danger ";} 
                                                      else if(Session::exists('success')) { echo " alert-success ";} 
                                                      else{ echo " hidden "; }
                                                 ?>alert animated tada">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <p><?php  if(Session::exists('validation-errors')){ echo Session::flash('validation-errors');}
                                                  else if(Session::exists('error')){echo Session::flash('error');}
                                                  else if(Session::exists('success')) { echo Session::flash('success');}
                                            ?></p>
                  </div>
                
                
                
                <div id="reviewdetails">
                <div class="row" >
                    <div class="col-md-9">
                        <br>
                        <h2 style="padding-left:20px;">Manage Reviews</h2>
                    </div>
                    
                    
                   
                </div>
     
          <?php $review->populateReviewResponse();?>
                   
                    
                     
                          
                   
                  
                    
                </div>
                
           
              
            </div>
            
            
  
	</main><!--END MAIN-->
        
        
                    <!-- Modal -->
<div class="modal fade" id="respondmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style='background-color: #b49b65;'>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style='color: #FFF;'>Respond to a Review</h4>
      </div>
      <div class="modal-body">
          
           <div class="container-fluid">
            <div class="row">
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Reviewer Name:</label>
               <p class="details">Alex </p>
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Rating:</label>
               <div id="starrating_details">
                                <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> (5)
                            </div>  
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Review Date:</label>
               <p class="details">21/11/2015 20:14:22 </p>
              </div>
              
            </div>
               
            <div class="row">
              <div class="col-sm-12">
               <label for="product_name" class="control-label">Review:</label>
               <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
              </div>                          
            </div>                 
          
         <form action="" method="post" id='addeditorform'>
         
          <div class="form-group">
            <label for="editor_comment" class="control-label">Response</label> 
            <textarea rows="5" class="form-control" required id="editor_comment"></textarea>
             <a class="pull-right" href="mailto:aspiteri6@gmail.com">Send an email instead</a>
          </div>
            
        </form> 
           </div>
      </div>
      <div class="modal-footer">
          
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
        <button type="button" class="btn btn-theme-dark">Respond</button>
      </div>
    </div>
  </div>
</div>
                    
<div class="modal fade" id="reviewmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style='background-color: #b49b65;'>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style='color: #FFF;'>Review Details</h4>
      </div>
      <div class="modal-body">
          
           <div class="container-fluid">
            <div class="row">
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Reviewer Name:</label>
               <p class="details">Alex </p>
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Rating:</label>
               <div id="starrating_details">
                                <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> <i class="fa fa-star" ></i> (5)
                            </div>  
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Review Date:</label>
               <p class="details">21/11/2015 20:14:22 </p>
              </div>
              
            </div>
               
            <div class="row">
              <div class="col-sm-12">
               <label for="product_name" class="control-label">Review:</label>
               <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
              </div>                          
            </div>      
               <hr>
               
            <div class="row">
                <div class="col-sm-4">
               <label for="product_name" class="control-label">Status:</label>
               <p class="details">Responded </p>
             
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Responder Name:</label>
               <p class="details">Admin </p>
              </div>
              <div class="col-sm-4">
               <label for="product_name" class="control-label">Response Date:</label>
               <p class="details">21/11/2015 20:14:22 </p>
             
              </div>
              
              
            </div>
               
            <div class="row">
              <div class="col-sm-12">
               <label for="product_name" class="control-label">Response:</label>
               <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
              </div>                          
            </div>    
          
        
           </div>
      </div>
      <div class="modal-footer">
          
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
        <a href="mailto:abc@123.com">  <button type="button" class="btn btn-theme-dark">Send Email</button></a>
      </div>
    </div>
  </div>
</div>
          
		
        <?php require_once("masterpage/footer.php")?>
