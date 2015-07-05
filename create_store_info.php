        <?php require_once("masterpage/header.php");
        
         $user = new User();
        if(!$user->isLoggedIn()){
            Redirect::to('register.php');
        }
           
        if(Input::exists('get'))
        { 
            $business_id = Input::get("id");
           
            
        }
        ?>

        
	<main>
            <div class="breadcrumb-wrap">
		<div class="container">
                    <div class="row">
			<div class="col-sm-6">
                            <h4>Store Information</h4>
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
                
                <div class="<?php if(Session::exists('validation-errors') || Session::exists('info-error')){ echo " alert-danger ";} 
                                                      else if(Session::exists('location-success')) { echo " alert-success ";} 
                                                      else{ echo " hidden "; }
                                                 ?>alert animated tada">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <p><?php  if(Session::exists('validation-errors')){ echo Session::flash('validation-errors');}
                                                  else if(Session::exists('info-error')){echo Session::flash('info-error');}
                                                  else if(Session::exists('location-success')) { echo Session::flash('location-success');}
                                            ?></p>
                </div>
                
                
                <div class="row">
                    
                    
                    
                    <div class="col-md-4">
                        <h4>Upload Logo</h4>
                        <form action="process/logoupload_process.php" id="uploadlogoform" class="dropzone">
                            <input type="hidden" name="id" value="<?php echo $business_id;?>">
                            <div class="fallback">
                              <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <h4>Upload Cover</h4>
                        <form action="process/coverupload_process.php" id="uploadcoverform" class="dropzone">
                            <input type="hidden" name="id" value="<?php echo $business_id;?>">
                          
                            <div class="fallback">
                              <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                </div> 
                <div class="divide20"></div>
                <form action="process/info_process.php" method="post" id="storeinfo_form" >
                <div class="row">
                    <div class="col-md-12">
                        <h4>Short Description</h4>
                        <textarea name="shortdesc" id="shortdesc" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                       
                        <h4>Long Description</h4>
                        <textarea name="longdesc" rows="10" id="longdesc" class="form-control"></textarea>
                    </div>
                </div>
                <h4>Business Hours</h4>
                <div class="row">
                   
                    <div class="col-md-3">         
                         
                             <input type="checkbox" class="form-control" name="always" id="always" />
                             <label>Open Every Day</label>
                        
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <p> OPEN</p>
                    </div>
                    
                    <div class="col-md-4 hidden-xs hidden-sm">
                         <p> CLOSE</p>
                    </div>
                    <div class="col-md-1">
                        
                    </div>      
                    
                </div>
                
                <div class="row">
                    <div class="col-md-3">         
                         <input type="checkbox" class="form-control" name="monday_check" id="monday_check" />
                         <label>Monday</label>
                    </div>
                    <div class="col-md-4">
                        <input type="time" class="form-control" name="monday_open_1" id="monday_open_1" />
                    </div>
                    
                    <div class="col-md-4">
                         <input type="time" class="form-control" name="monday_close_1" id="monday_close_1" />
                    </div>
                    <div class="col-md-1">
                        <button value="Add" class="form-control" id="addtime_mon">Add</button>
                    </div>      
                    
                </div>
                
                <div class="row">
                    <div class="col-md-3">         
                         <input type="checkbox" class="form-control" name="tuesday_check" id="tuesday_check" />
                         <label>Tuesday</label>
                    </div>
                    <div class="col-md-4">
                        <input type="time" class="form-control" name="tuesday_open_1" id="tuesday_open_1" />
                    </div>
                    
                    <div class="col-md-4">
                         <input type="time" class="form-control" name="tuesday_close_1" id="tuesday_close_1" />
                    </div>
                    <div class="col-md-1">
                        <button class="form-control" id="addtime_teu">Add</button>
                    </div>      
                    
                </div>
                
                <div class="row">
                    <div class="col-md-3">         
                         <input type="checkbox" class="form-control" name="wednesday_check" id="wednesday_check" />
                         <label>Wednesday</label>
                    </div>
                    <div class="col-md-4">
                        <input type="time" class="form-control" name="wednesday_open_1" id="wednesday_open_1" />
                    </div>
                    
                    <div class="col-md-4">
                         <input type="time" class="form-control" name="wednesday_close_1" id="wednesday_close_1" />
                    </div>
                    <div class="col-md-1">
                        <button class="form-control" id="addtime_wed">Add</button>
                    </div>         
                    
                </div>
                
                <div class="row">
                    <div class="col-md-3">         
                         <input type="checkbox" class="form-control" name="thursday_check" id="thursday_check" />
                         <label>Thursday</label>
                    </div>
                    <div class="col-md-4">
                        <input type="time" class="form-control" name="thursday_open_1" id="thursday_open_1" />
                    </div>
                    
                    <div class="col-md-4">
                         <input type="time" class="form-control" name="thursday_close_1" id="thursday_close_1" />
                    </div>
                    <div class="col-md-1">
                        <button class="form-control" id="addtime_thu">Add</button>
                    </div>         
                    
                </div>
                    
                <div class="row">
                    <div class="col-md-3">         
                         <input type="checkbox" class="form-control" name="friday_check" id="friday_check" />
                         <label>Friday</label>
                    </div>
                    <div class="col-md-4">
                        <input type="time" class="form-control" name="friday_open_1" id="friday_open_1" />
                    </div>
                    
                    <div class="col-md-4">
                         <input type="time" class="form-control" name="friday_close_1" id="friday_close_1" />
                    </div>
                    <div class="col-md-1">
                        <button class="form-control" id="addtime_fri">Add</button>
                    </div>         
                    
                </div>
                    
                    
                <div class="row">
                    <div class="col-md-3">         
                         <input type="checkbox" class="form-control" name="saturday_check" id="saturday_check" />
                         <label>Saturday</label>
                    </div>
                    <div class="col-md-4">
                        <input type="time" class="form-control" name="saturday_open_1" id="saturday_open_1" />
                    </div>
                    
                    <div class="col-md-4">
                         <input type="time" class="form-control" name="saturday_close_1" id="saturday_close_1" />
                    </div>
                    <div class="col-md-1">
                        <button class="form-control" id="addtime_sat">Add</button>
                    </div>         
                    
                </div>
                    
                    
                  <div class="row">
                    <div class="col-md-3">         
                         <input type="checkbox" class="form-control" name="sunday_check" id="sunday_check" />
                         <label>Sunday</label>
                    </div>
                    <div class="col-md-4">
                        <input type="time" class="form-control" name="sunday_open_1" id="sunday_open_1" />
                    </div>
                    
                    <div class="col-md-4">
                         <input type="time" class="form-control" name="sunday_close_1" id="sunday_close_1" />
                    </div>
                    <div class="col-md-1">
                        <button class="form-control" id="addtime_sun">Add</button>
                    </div>         
                    
                </div>
                
                <input type="hidden" name="token" value="<?php echo Token::generate();?>">
                <input type="hidden" name="id" value="<?php echo $business_id;?>">
               
                 <input class="btn btn-theme-bg pull-right" type="submit" value="Next">
              
                
              </form>
              
            </div>
            
            
            <div class="divide20"></div>
            
	</main><!--END MAIN-->
		
        <?php require_once("masterpage/footer.php")?>
