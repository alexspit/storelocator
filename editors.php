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
        
         $editor = new Editor();
         $editor->business_id = $business_id;
         
        
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
                                <li>Users</li>
                            </ol>
                        </div>
                    </div>
		</div>
            </div><!--breadcrumbs-->
            <div class="divide20"></div>  
			
            <div class="container" id="editors">
                <div class="col-md-12 <?php if(Session::exists('validation-errors') || Session::exists('error')){ echo " alert-danger ";} 
                                                      else if(Session::exists('success')) { echo " alert-success ";} 
                                                      else{ echo " hidden "; }
                                                 ?>alert animated tada">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <p><?php  if(Session::exists('validation-errors')){ echo Session::flash('validation-errors');}
                                                  else if(Session::exists('error')){echo Session::flash('error');}
                                                  else if(Session::exists('success')) { echo Session::flash('success');}
                                            ?></p>
                  </div>
                
                <div id="editordetails">
                   
                    
                <div class="row" >

                    <div class="col-md-9">
                        <br>
                        <h2 style="padding-left:20px;">Editor Details</h2>
                    </div>
                    
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <br>
                         <a style="margin-right:20px;" href="#" class="btn btn-lg btn-theme-dark pull-right" data-toggle="modal" data-target="#addproductmodal">Add Editor</a>
                    </div>
                   
                </div>
                    
                   
                    
                    <div class="row editortitles hidden-xs hidden-sm" id="editortitle">
                        <div class="col-md-3">
                            <h4>Name</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>Email</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>Access Level</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>Date Created</h4>
                        </div>
                        
                    </div>
                    <?php
                        $editor->populate(); 
                    
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
        <h4 class="modal-title" id="myModalLabel" style='color: #FFF;'>Add an Editor</h4>
      </div>
      <form action="process/addeditor_process.php" method="post" id='addeditorform'>
      <div class="modal-body">
         
                <div class="form-group">
                  <label for="editor_email" class="control-label">Email:</label>
                  <input type="email" class="form-control" name="editor_email" id="editor_email">
                </div>
                <div class="form-group">
                  <label for="editor_accesslevel" class="control-label">Access Level:</label>
                  <input type="number" max="4" min="1" class="form-control" name="access_level" id="editor_accesslevel" data-toggle="tooltip" data-placement="top" title="" data-original-title="1: Manage Products, 2: Manage Reviews, 3: Manage Editors, 4: All Permissions">


                </div>
                <div class="form-group">
                  <label for="editor_comment" class="control-label">Comment:</label>
                  <textarea class="form-control" name="editor_comment" id="editor_comment"></textarea>
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
