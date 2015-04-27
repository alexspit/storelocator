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
                            <h4>404 Not Found</h4>
                        </div>
			<div class="col-sm-6 hidden-xs text-right">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Error</li>
                                
                            </ol>
                        </div>
                    </div>
		</div>
            </div><!--breadcrumbs-->
           
        <div class="divide80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center error-text">
                        <div class="divide30"></div>
                        <h1 class="error-digit wow animated fadeInUp margin20"><i class="fa fa-thumbs-down"></i></h1>
                        <h2>Oopsie, the page could not be found!</h2>
                        <p><a href="#" class="btn border-black btn-lg">Go Back</a></p>
                    </div>
                </div>
            </div>
        <div class="divide60"></div>
            
	</main><!--END MAIN-->
		
        <?php require_once("masterpage/footer.php")?>



