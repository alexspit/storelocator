        <?php require_once("masterpage/header.php")?>

        
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
                    
                    <div class="row products" id="product_1">
                        <div class="col-md-2">
                            <img class="hidden-xs hidden-sm" src="img/img-5.jpg" width="50">
                        </div>
                        <div class="col-md-3">
                            <p class="details">Product1</p>  
                        </div>
                        <div class="col-md-3">
                            <p class="details">$25.00</p>  
                        </div>
                        <div class="col-md-4">
                            <p class="details">Lorem Ipomoea dolorest est.</p>  
                        </div>
                        
                         <div class="clearfix"></div><hr>
                    </div>
                    
                    <div class="row products" id="product_2">
                        <div class="col-md-2">
                            <img class="hidden-xs hidden-sm" src="img/img-5.jpg" width="50">
                        </div>
                        <div class="col-md-3">
                            <p class="details">Product1</p>  
                        </div>
                        <div class="col-md-3">
                            <p class="details">$25.00</p>  
                        </div>
                        <div class="col-md-4">
                            <p class="details">Lorem Ipomoea dolorest est.</p>  
                        </div>
                        
                         <div class="clearfix"></div><hr>
                    </div>
                    
                    <div class="row products" id="product_3">
                        <div class="col-md-2">
                            <img class="hidden-xs hidden-sm" src="img/img-5.jpg" width="50">
                        </div>
                        <div class="col-md-3">
                            <p class="details">Product1</p>  
                        </div>
                        <div class="col-md-3">
                            <p class="details">$25.00</p>  
                        </div>
                        <div class="col-md-4">
                            <p class="details">Lorem Ipomoea dolorest est.</p>  
                        </div>
                        
                         <div class="clearfix"></div><hr>
                    </div>
                    
                    <div class="row products" id="product_3">
                        <div class="col-md-2">
                            <img class="hidden-xs hidden-sm" src="img/img-5.jpg" width="50">
                        </div>
                        <div class="col-md-3">
                            <p class="details">Product1</p>  
                        </div>
                        <div class="col-md-3">
                            <p class="details">$25.00</p>  
                        </div>
                        <div class="col-md-4">
                            <p class="details">Lorem Ipomoea dolorest est.</p>  
                        </div>
                        
                         <div class="clearfix"></div><hr>
                    </div>
                    
                    <div class="row products" id="product_3">
                        <div class="col-md-2">
                            <img class="hidden-xs hidden-sm" src="img/img-5.jpg" width="50">
                        </div>
                        <div class="col-md-3">
                            <p class="details">Product1</p>  
                        </div>
                        <div class="col-md-3">
                            <p class="details">$25.00</p>  
                        </div>
                        <div class="col-md-4">
                            <p class="details">Lorem Ipomoea dolorest est.</p>  
                        </div>
                        
                         <div class="clearfix"></div><hr>
                    </div>
                    
                    <div class="row products" id="product_3">
                        <div class="col-md-2">
                            <img class="hidden-xs hidden-sm" src="img/img-5.jpg" width="50">
                        </div>
                        <div class="col-md-3">
                            <p class="details">Product1</p>  
                        </div>
                        <div class="col-md-3">
                            <p class="details">$25.00</p>  
                        </div>
                        <div class="col-md-4">
                            <p class="details">Lorem Ipomoea dolorest est.</p>  
                        </div>
                        
                        
                    </div>
                    
                     
                          
                   
                  
                    
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
      <div class="modal-body">
        <form id='addproductform'>
          <div class="form-group">
            <label for="product_name" class="control-label">Product Name:</label>
            <input type="text" class="form-control" id="product_name">
          </div>
          <div class="form-group">
            <label for="product_price" class="control-label">Price:</label>
            <input type="number" step="any" class="form-control" id="product_price">
          </div>
          <div class="form-group">
            <label for="product_desc" class="control-label">Description:</label>
            <textarea class="form-control" id="product_desc"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-theme-dark">Add</button>
      </div>
    </div>
  </div>
</div>
          
		
        <?php require_once("masterpage/footer.php")?>
