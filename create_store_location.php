        <?php require_once("masterpage/header.php");
        
        $user = new User();
        if(!$user->isLoggedIn()){
            Redirect::to('register.php');
        }
        ?>

        
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
                         <div class="<?php if(Session::exists('validation-errors') || Session::exists('location-error')){ echo " alert-danger ";} 
                                                      else if(Session::exists('login-success')) { echo " alert-success ";} 
                                                      else{ echo " hidden "; }
                                                 ?>alert animated tada">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <p><?php  if(Session::exists('validation-errors')){ echo Session::flash('validation-errors');}
                                                  else if(Session::exists('location-error')){echo Session::flash('location-error');}
                                                  else if(Session::exists('login-success')) { echo Session::flash('login-success');}
                                            ?></p>
                                </div>
                         <form action="process/location_process.php" method="post" id="locationform" role="form">
                                <h4>Location</h4>
                                
                                

                                <div class="form-group">
                                   <div class="col-md-12">
                                       <input type="text" id="business_name" name="business_name" class="form-control" placeholder="Store Name">          
                                   </div>
                                   
                                    
                                  
                                   <div class="col-md-12">
                                         <select id="category" name="category" class="form-control">
                                            <?php 
                                   $category = new Category();
                                   $category->loadDropDown();
                                   
                                   ?>
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
                                       <input type="text" id="lat" name="lat" class="form-control" placeholder="Latitude">     
                                       
                                   </div>
                                   <div class="col-md-6">
                                       <input type="text" id="lng" name="lng" class="form-control" placeholder="Longitude">    
                                      
                                   </div>
                                    <input type="hidden" name="creator_id" value="<?php echo $user->data()->user_id;?>">
                                    <input type="hidden" name="token" value="<?php echo Token::generate();?>">
                                    <button class="btn btn-theme-bg pull-right" type="submit">Next</button>
                                   
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
