        <?php require_once("masterpage/header.php");
        
        $user = new User();
        if(!$user->isLoggedIn()){
            Redirect::to('register.php');
        }
        
        $editor = new Editor();
        $editor->user_id = $user->data()->user_id; 
                        
                        
        
       
        ?>

        
	<main>
            <div class="breadcrumb-wrap">
		<div class="container">
                    <div class="row">
			<div class="col-sm-6">
                            <h4>Editor Businesses</h4>
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
                
               <?php $editor->getEditorBusiness();?>
		  <!------------------Business DETAILS
                <div class="row" id="storedetails">
                    <div class="col-md-12">
                        <br>
                        <h2>Business Details</h2>                      
                    </div>
  

                    <div class="col-md-3">
                        <p class="title">Business Name</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">ffsdsd</p>                      
                    </div>
                    
                     <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Access Level</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">sdfdsfs</p>                      
                    </div>
                     
                     <div class="clearfix"></div><hr>
                     
                    <div class="col-md-3">
                        <p class="title">Granted Access On</p>                      
                    </div>
                    
                    <div class="col-md-9">
                        <p class="details">sdfsdf</p>                      
                    </div>
                     
                     <div class="col-md-12">
                        <a style="margin-right:20px;" href="#" class="btn btn-lg btn-theme-dark pull-right" >Go</a>
                                  
                    </div>
                     
                </div>
                 DETAILS--------------------------->  
                
           
                
       
              
            </div>
            
            
	</main><!--END MAIN-->
		
        <?php require_once("masterpage/footer.php")?>
