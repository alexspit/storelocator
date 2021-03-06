<?php require_once("masterpage/header.php");
 $action = "login";     
if(Input::exists('get'))
{ 
    $action = Input::get("action");
}

   
        
        ?>
	
<main>
            <div class="breadcrumb-wrap">
		<div class="container">
                    <div class="row">
			<div class="col-sm-6">
                            <h4>Account Creation</h4>
                        </div>
			<div class="col-sm-6 hidden-xs text-right">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="register.php">Register</a></li>
                            </ol>
                        </div>
                    </div>
		</div>
            </div><!--breadcrumbs-->
            <div class="divide20"></div>
            
            





<div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs text-center" role="tablist">
                            <li role="presentation" class="<?php if($action == 'login'){echo "active";}?>" ><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
                            <li role="presentation" class="<?php if($action == 'register'){echo "active";}?>"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane <?php if($action == 'login'){echo "active";}?>" id="login">
                                <form action="process/login-process.php" method="post" id="loginform">
                                    
                                    
                                    <div class="<?php if(Session::exists('validation-errors') || Session::exists('login-error')){ echo " alert-danger ";} 
                                                      else if(Session::exists('registration-success')) { echo " alert-success ";} 
                                                      else{ echo " hidden "; }
                                                 ?>alert animated tada">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <p><?php  if(Session::exists('validation-errors')){ echo Session::flash('validation-errors');}
                                                  else if(Session::exists('login-error')){echo Session::flash('login-error');}
                                                  else if(Session::exists('registration-success')) { echo Session::flash('registration-success');}
                                            ?></p>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="loginform_email">Email address</label>
                                        <input type="email" class="form-control" name="email" id="loginform_email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="loginform_password">Password</label>
                                        <input type="password" class="form-control" name="password" id="loginform_password" placeholder="Password">
                                    </div>                                  
                                    <div class="pull-left">

                                        <p><a href="#">Forget password?</a></p>

                                    </div>
                                    <div class="pull-right">
                                        <input type="hidden" name="token" value="<?php echo Token::generate();?>">
                                        <button type="submit" class="btn btn-theme-dark">Login</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div><!--login tab end-->
                            
                            
                            
                            
                            <div role="tabpanel" class="tab-pane <?php if($action == 'register'){echo "active";}?>" id="profile">
                                <form action="process/register-process.php" method="post" id="registerform">
                                    
                                    <div class="<?php if(Session::exists('registration-errors') || Session::exists('exception')){ echo " alert-danger ";} 
                                                      else if(Session::exists('registration-success')) { echo " alert-success ";} 
                                                      else{ echo " hidden "; }
                                                 ?>alert animated tada">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <p><?php  if(Session::exists('registration-errors')){ echo Session::flash('registration-errors');}
                                                  else if(Session::exists('exception')){echo Session::flash('exception');}
                                                  else if(Session::exists('registration-success')) { echo Session::flash('registration-success');}
                                            ?></p>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputname">Surname</label>
                                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Enter Surname">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail11">Email address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword11">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>    
                                    <div class="form-group">
                                        <label for="exampleInputPassword111">Confirm Password</label>
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Password">
                                    </div> 
                                    <div class="pull-left checkbox">
                                        <label>
                                            <input type="checkbox"> Accept terms & condition.
                                        </label>

                                    </div>
                                    <div class="pull-right">
                                        <input type="hidden" name="token" value="<?php echo Token::generate();?>">
                                        <button type="submit" class="btn btn-theme-dark btn-lg">Register</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div><!--register tab end-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
            
	</main><!--END MAIN-->
		
        
                <?php require_once("masterpage/footer.php")?>
