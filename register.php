        <?php require_once("masterpage/header.php")?>
	
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
                            <li role="presentation" ><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
                            <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane " id="login">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>                                  
                                    <div class="pull-left">

                                        <p><a href="#">Forget password?</a></p>

                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-theme-dark">Login</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div><!--login tab end-->
                            <div role="tabpanel" class="tab-pane active" id="profile">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputname">Name</label>
                                        <input type="text" class="form-control" id="exampleInputname" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputname">Surname</label>
                                        <input type="text" class="form-control" id="exampleInputname" placeholder="Enter Surname">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail11">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail11" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword11">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword11" placeholder="Password">
                                    </div>    
                                    <div class="form-group">
                                        <label for="exampleInputPassword111">Re-Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword111" placeholder="Password">
                                    </div> 
                                    <div class="pull-left checkbox">
                                        <label>
                                            <input type="checkbox"> Accept terms & condition.
                                        </label>

                                    </div>
                                    <div class="pull-right">
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
