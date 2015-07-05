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
        
        
        ?>

        
	<main>
            <div class="breadcrumb-wrap">
		<div class="container">
                    <div class="row">
			<div class="col-sm-6">
                            <h4>Contact Details</h4>
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
                
                <div class="<?php if(Session::exists('validation-errors') || Session::exists('contact-error')){ echo " alert-danger ";} 
                                                      else if(Session::exists('info-success')) { echo " alert-success ";} 
                                                      else{ echo " hidden "; }
                                                 ?>alert animated tada">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <p><?php  if(Session::exists('validation-errors')){ echo Session::flash('validation-errors');}
                                                  else if(Session::exists('contact-error')){echo Session::flash('contact-error');}
                                                  else if(Session::exists('info-success')) { echo Session::flash('info-success');}
                                            ?></p>
                </div>
                
		 <h4>Online Contact Details</h4>
                 <form action="process/contact_process.php" method="post" name="storecontact_form" id="storecontact_form">
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                               <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-laptop" ></i></span>
                                <input type="url" class="form-control" name="url" id="url" placeholder="Website URL">
                        </div>
                       
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-mobile-phone" style="font-size: 150%;"></i></span>
                                  <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
                        </div>
                     
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-phone" style="font-size: 130%;"></i></span>
                                  <input type="tel" class="form-control" name="landline" id="landline" placeholder="Landline">
                        </div>
                        
                    </div>
                </div>
                     <h4>Social Media Details</h4>
                <div class="row">
                    
                   <div class="col-sm-12">
                        
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-facebook" style="font-size: 135%;"></i></span>
                                <input type="url" class="form-control" name="facebook" id="facebook" placeholder="Facebook URL">
                        </div>
                    </div>
                    
                     <div class="col-sm-12">
                        
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-twitter" ></i></span>
                                <input type="url" class="form-control" name="twitter" id="twitter" placeholder="Twitter URL">
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-google-plus" ></i></span>
                                <input type="url" class="form-control" name="googleplus" id="googleplus" placeholder="Google Plus URL">
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-linkedin" ></i></span>
                                <input type="url" class="form-control" name="linkedin" id="linkedin" placeholder="LinkedIn URL">
                        </div>
                    </div>
                    
                    
                </div>
                    <input type="hidden" name="token" value="<?php echo Token::generate();?>">
                <input type="hidden" name="id" value="<?php echo $business_id;?>">
               
                 <input class="btn btn-theme-bg pull-right" type="submit" value="Finish">
                </form>
                </div>
            <div class="divide20"></div>
            
	</main><!--END MAIN-->
		
        <?php require_once("masterpage/footer.php")?>
