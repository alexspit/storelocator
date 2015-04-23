        <?php require_once("masterpage/header.php");
        $user = new User();
        if(!$user->isLoggedIn()){
            Redirect::to('register.php');
        }
        
        $business_id = $user->getBusiness();
        
        
        if(Input::exists('get'))
        { 
            $business_id = Input::get("id");              
        }
        
        $business = new Business($business_id);
        //$business->getBusinessHours();
        
       $product = new Product();
        $product->business_id = $business_id;
       
        
        
        ?>

        
	<main>
            <div class="breadcrumb-wrap">
		<div class="container">
                    <div class="row">
			<div class="col-sm-6">
                            <h4>Dashboard</h4>
                        </div>
			<div class="col-sm-6 hidden-xs text-right">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Manage</li>
                                <li>Products</li>
                            </ol>
                        </div>
                    </div>
		</div>
            </div><!--breadcrumbs-->
            <div class="divide20"></div>
            

			
            <div class="container" id="products">
                <div id="productdetails">
                <div class="row" >
                    <div class="col-md-9">
                        <br>
                        <h2 style="padding-left:20px;">Product Details</h2>
                    </div>
                    
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <br>
                         <a style="margin-right:20px;" href="#" class="btn btn-lg btn-theme-dark pull-right" data-toggle="modal" data-target="#addproductmodal">Add Product</a>
                    </div>
                   
                </div>
                    
                   
                    
                    <div class="row producttitles hidden-xs hidden-sm" id="producttitle">
                        <div class="col-md-2">
                            <h4>Thumbnail</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>Name</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>Price</h4>
                        </div>
                        <div class="col-md-4">
                            <h4>Description</h4>
                        </div>
                    </div>
                    
                   <?php
                    $product->populate();
                   ?>
                  
                    
                     
                          
                   
                  
                    
                </div>
                
           
              
            </div>
            
            
  
	</main><!--END MAIN-->
        
        
                    <!-- Modal -->
<div class="modal fade" id="addproductmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style='background-color: #b49b65;'>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add a Product</h4>
      </div>  
        <form id='addproductform' action="process/addproduct_process.php" method="post">
                <div class="modal-body">

                    <div class="form-group">
                      <label for="product_name" class="control-label">Product Name:</label>
                      <input type="text" class="form-control" name="product_name" id="product_name">
                    </div>
                    <div class="form-group">
                      <label for="product_price" class="control-label">Price:</label>
                      <input type="number" step="any" class="form-control" name="product_price" id="product_price">
                    </div>
                    <div class="form-group">
                      <label for="product_desc" class="control-label">Description:</label>
                      <textarea class="form-control" name="description" id="product_desc"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                  <input type="hidden" name="token" value="<?php echo Token::generate();?>">
                     <input type="hidden" name="id" value="<?php echo $business_id;?>">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-theme-bg pull-right" type="submit">Add</button>
                </div>
       </form>
    </div>
  </div>
</div>
          
		
        <?php require_once("masterpage/footer.php")?>
