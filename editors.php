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
                                <li>Users</li>
                            </ol>
                        </div>
                    </div>
		</div>
            </div><!--breadcrumbs-->
            <div class="divide20"></div>
            

			
            <div class="container" id="editors">
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
                            <h4>Premissions</h4>
                        </div>
                        
                    </div>
                    
                    <div class="row editors" id="editor_1">
                        <div class="col-md-3">
                            <p class="details">John</p>  
                        </div>
                        <div class="col-md-3">
                            <p class="details">john@gmail.com</p>    
                        </div>
                        <div class="col-md-3">
                            <p class="details">2</p> 
                        </div>
                        <div class="col-md-3">
                            <p class="details">Can Add Products<br>
                                Can respond to reviews
                            </p>  
                        </div>
                        
                         <div class="clearfix"></div><hr>
                    </div>
                    
                      <div class="row editors" id="editor_1">
                        <div class="col-md-3">
                            <p class="details">Mary</p>  
                        </div>
                        <div class="col-md-3">
                            <p class="details">mary@gmail.com</p>    
                        </div>
                        <div class="col-md-3">
                            <p class="details">5</p> 
                        </div>
                        <div class="col-md-3">
                            <p class="details">Can Add Products<br>
                                Can respond to reviews<br>
                                Can Add Editors
                            </p>  
                        </div>
                        
                         <div class="clearfix"></div><hr>
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
        <h4 class="modal-title" id="myModalLabel" style='color: #FFF;'>Add an Editor</h4>
      </div>
      <div class="modal-body">
        <form id='addeditorform'>
          <div class="form-group">
            <label for="editor_email" class="control-label">Email:</label>
            <input type="email" class="form-control" id="editor_email">
          </div>
          <div class="form-group">
            <label for="editor_accesslevel" class="control-label">Access Level:</label>
            <input type="number" max="4" min="1" class="form-control" id="editor_accesslevel" data-toggle="tooltip" data-placement="top" title="" data-original-title="1: Manage Products, 2: Manage Reviews, 3: Manage Editors, 4: All Permissions">
            
            
          </div>
          <div class="form-group">
            <label for="editor_comment" class="control-label">Comment:</label>
            <textarea class="form-control" id="editor_comment"></textarea>
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
