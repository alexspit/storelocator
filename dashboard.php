        <?php require_once("masterpage/header.php");
        
        $user = new User();
        if(!$user->isLoggedIn()){
            Redirect::to('register.php');
        }
        
        $business_id = $user->getBusiness();
        $business = new Business($business_id);
        //$business->getBusinessHours();
       
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
                                
                            </ol>
                        </div>
                    </div>
		</div>
            </div><!--breadcrumbs-->
            <div class="divide20"></div>
			
            <div class="container" id="dashboarddetails">
		
                <div class="row" id="storedetails">
                    <div class="col-md-12">
                        <br>
                        <h2>Store Details</h2>                      
                    </div>
                    
                   <!------------------STORE DETAILS---------------------------> 
                   

                    <div class="col-md-3">
                        <p class="title">Store Name</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details"><?php echo $business->business_name;?></p>                      
                    </div>
                    
                     <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Category</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details"><?php echo $business->category->category_name;?></p>                      
                    </div>
                     
                     <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Summary</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details"><?php echo $business->short_desc;?></p>                      
                    </div>
                    <!------------------STORE DETAILS--------------------------->   
                </div>
                
                
                 <div class="row" id="contactdetails">
                    <div class="col-md-12">
                        <br>
                        <h2>Contact Details</h2>                      
                    </div>
                    
                    <div class="col-md-3">
                        <p class="title">Email</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details"><a href="mailto:<?php echo $business->email;?>"><?php echo $business->email;?></a></p>                      
                    </div>
                    
                     <div class="clearfix"></div><hr>
                     
                   <!-- <div class="col-md-3">
                        <p class="title">Website</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details"><a href="https://www.alexstore.com">https://www.alexstore.com</a></p>                      
                    </div>
                     
                     <div class="clearfix"></div><hr>-->
                     
                    <div class="col-md-3">
                        <p class="title">Mobile</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details"><a href="tel:<?php echo $business->mobile;?>"><?php echo $business->mobile;?></a></p>                      
                    </div>
                     
                      <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Landline</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details"><a href="tel:<?php echo $business->landline;?>"><?php echo $business->landline;?></a></p>                      
                    </div>
                      
                      
                      <div class="clearfix"></div><hr>
                      <div class="col-md-3">
                        <p class="title">Address</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <address>
                            <p class="details"><?php echo $business->business_name;?>,<br>
                            <?php echo $business->address->street;?>, <br>
                            <?php echo $business->address->city;?>, <?php echo $business->address->country;?>,<br>
                            <?php echo $business->address->zip_code;?></p> 
                        </address>                     
                    </div>
                </div>
              
                
                
                
                <div class="row" id="businesshoursndetails">
                    <div class="col-md-12">
                        <br>
                        <h2>Business Hours</h2>                      
                    </div>
                    <?php echo $business->getBusinessHours();?>
                  
                    <!--
                     <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Monday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">08:00 - 21:00</p>                      
                    </div>
                     
                     <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Tuesday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">08:00 - 21:00</p>                      
                    </div>
                     
                      <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Wednesday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">08:00 - 21:00</p>                      
                    </div>
                      
                      <div class="clearfix"></div><hr>
                      
                    <div class="col-md-3">
                        <p class="title">Thursday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">08:00 - 21:00</p>                      
                    </div>
                     
                      <div class="clearfix"></div><hr>
                      
                    <div class="col-md-3">
                        <p class="title">Friday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">08:00 - 12:00 | 14:00 - 20:00</p>                      
                    </div>
                     
                      <div class="clearfix"></div><hr>
                    <div class="col-md-3">
                        <p class="title">Saturday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">CLOSED</p>                      
                    </div>
                     
                      <div class="clearfix"></div><hr>
                    
                      <div class="col-md-3">
                        <p class="title">Sunday</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">CLOSED</p>                      
                    </div>
                     
                      <div class="clearfix"></div><hr>-->
                </div>
              
            </div>
            
            
	</main><!--END MAIN-->
		
        <?php require_once("masterpage/footer.php")?>
