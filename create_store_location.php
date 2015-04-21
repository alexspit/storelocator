        <?php require_once("masterpage/header.php")?>

        
	<main>
            <div class="breadcrumb-wrap">
		<div class="container">
                    <div class="row">
			<div class="col-sm-6">
                            <h4>Store Location</h4>
                        </div>
			<div class="col-sm-6 hidden-xs text-right">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Create</li>
                            </ol>
                        </div>
                    </div>
		</div>
            </div><!--breadcrumbs-->
            <div class="divide20"></div>
			
            <div class="container">
		
                
                <div class="row">
                     <div class="col-md-4">
                            <form action="locationform.php" role="form">
                                <h4>Location</h4>

                                <div class="form-group" id="locationform">
                                   <div class="col-md-12">
                                       <input type="text" id="storename" name="storename" class="form-control" placeholder="Store Name">          
                                   </div>
                                    
                                   <div class="col-md-12">
                                         <select id="category" name="category" class="form-control">
                                            <option selected disabled>Category</option>
                                            <option>Restaurants</option>
                                            <option>Car Repairs</option>
                                            <option>Insurance</option>
                                            <option>Hotel</option>
                                            <option>Confectionary</option>
                                        </select>         
                                   </div>
                                    
                                   <div class="col-md-12">
                                         <select id="country" name="country" class="form-control">
                                            <option selected disabled>Country</option>
                                            <option>Malta</option>
                                            <option>Gozo</option>
                                            <option>Comino</option>  
                                        </select>         
                                   </div>
                                   
                                   <div class="col-md-12">
                                       <input type="text" id="city" name="city" class="form-control" placeholder="City">          
                                   </div>
                                   
                                   <div class="col-md-12">
                                       <input type="text" id="street" name="street" class="form-control" placeholder="Street">          
                                   </div>
                                    
                                   <div class="col-md-12">
                                       <input type="text" id="floor" name="floor" class="form-control" placeholder="Floor/Block">          
                                   </div>
                                    
                                   <div class="col-md-12">
                                       <input type="text" id="zip" name="zip" class="form-control" placeholder="ZIP Code">          
                                   </div>
                                    
                                   <div class="col-md-6">
                                       <input type="number" id="lat" name="lat" class="form-control" disabled placeholder="Latitude">     
                                       
                                   </div>
                                   <div class="col-md-6">
                                       <input type="number" id="lng" name="lng" class="form-control" disabled placeholder="Longitude">    
                                      
                                   </div>
                                 
                                          
                                    <a class="btn btn-theme-bg pull-right" href="create_store_info.php">Next</a>
                                   
                                   <div id="current"></div>
                                   <div class="clearfix"></div>
                                                                              
                                </div>                                            
                            </form>
                    </div>
                    <div class="col-md-8 hidden-sm hidden-xs">
                        
                         <div id="map-canvas"></div>
                    </div>
                </div>
            
            
	
        </main><!--END MAIN-->
		
        <?php require_once("masterpage/footer.php")?>
