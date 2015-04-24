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
              $editor->getEditorBusiness();exit;
                 DETAILS--------------------------->  
                
           
                
       
              
            </div>
            
            
	</main><!--END MAIN-->
		
        <?php require_once("masterpage/footer.php")?>
