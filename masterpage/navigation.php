<?php 
//$user = new User();

if (!$user->isLoggedIn()){   
return;    
}
if ($user->isLoggedIn() && !$user->hasBusiness()){
    echo '<li class="dropdown">
            <a href="./create_store_location.php">Create Store</a>
          </li>';
}
if ($user->isLoggedIn() && $user->businessSelected()){
    echo '<li class="dropdown">		
            <a href="./dashboard.php">Dashboard</a>
          </li>';
}
if ($user->isLoggedIn() && $user->businessSelected() && $user->hasAccessToEditors()){
    echo '<li class="dropdown ">		
            <a href="./editors.php">Editors</a>
          </li>';
}
if ($user->isLoggedIn() && $user->businessSelected() && $user->hasAccessToProducts()){
    echo '<li class="dropdown ">		
            <a href="./products.php">Products</a>
          </li>';
}
if ($user->isLoggedIn() && $user->businessSelected() && $user->hasAccessToReviews()){
    echo '<li class="dropdown ">		
            <a href="./reviews.php">Reviews</a>
          </li>';
}

?>

