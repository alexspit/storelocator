        <?php require_once("masterpage/header.php")?>

        
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
                <div class="row">
                    <div class="col-md-4">
                        <p>Upload Logo</p>
                        <form action="logoupload.php" id="uploadlogoform" class="dropzone">
                            
                            <div class="fallback">
                              <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <p>Upload Cover</p>
                        <form action="coverupload.php" id="uploadcoverform" class="dropzone">
                            
                            <div class="fallback">
                              <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                </div> 
                
                <form action="" id="storeinfo_form" >
                <div class="row">
                    <div class="col-md-12">
                        <p>Short Description</p>
                        <textarea name="shortdesc" id="shortdesc" class="form-control">
                            
                        </textarea>
                    </div>
                    <div class="col-md-12">
                        <p>long Description</p>
                        <textarea name="longdesc" rows="10" id="longdesc" class="form-control">
                            
                        </textarea>
                    </div>
                </div>
                <p>Business Hours</p>
                <div class="row">
                   
                    <div class="col-md-3">         
                         
                             <input type="checkbox" class="form-control" name="always" id="always" />
                             <label>Always Open</label>
                        
                    </div>
                    <div class="col-md-4">
                        <p> OPEN</p>
                    </div>
                    
                    <div class="col-md-4">
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
                         <input type="checkbox" class="form-control" name="teusday_check" id="teusday_check" />
                         <label>Tuesday</label>
                    </div>
                    <div class="col-md-4">
                        <input type="time" class="form-control" name="teusday_open_1" id="teusday_open_1" />
                    </div>
                    
                    <div class="col-md-4">
                         <input type="time" class="form-control" name="teusday_close_1" id="teusday_close_1" />
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
                    
                <a class="btn btn-theme-bg pull-right" href="create_store_contact.php">Next</a>
                
              </form>
              
            </div>
            
            
            
            
	</main><!--END MAIN-->
		
        <?php require_once("masterpage/footer.php")?>
