<?php
    include 'php_files/config.php';
    if(!session_id()){ session_start(); }
    if(!isset($_SESSION['admin_name'])) {
        header("location:{$base_url}/admin");
    }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Montserrat:400,500,700,900" rel="stylesheet">
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.css">
        <script src="https://kit.fontawesome.com/0366694a71.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
        <!-- Jquery textEditor -->
        <link rel="stylesheet" href="css/jquery-te-1.4.0.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="admin-header">
            <div class="container-fluid">
                <div class="row">
             
                    <div class="col-md-offset-8 col-md-2">

            
                
                    <div id="adminDisplay">       
                           <?php
                                if(!session_id()){
                                    session_start();
                                }
                                echo 'Hey, '.$_SESSION['admin_name']; ?>
</div>
                




                
                    </div>
                </div>
                <div id="text-head"><a href="facebook.com">Madira.np</a></div>
            </div>
        </div>
    
  
        <div id="admin-wrapper">
            <div class="container-fluid">
            
                <div class="row">
         
                    <!-- Menu Bar Start -->
                    <div class="col-md-2 col-sm-3" id="admin-menu">
               
                         <ul class="menu-list">
                         <header>Menu</header>
                         
                            <li <?php if(basename($_SERVER['PHP_SELF']) == "dashboard.php") echo 'class="active"'; ?>></i><a href="dashboard.php">  <i class="fa-solid fa-gauge "></i>Dashboard</a></li>
                            <li <?php if(basename($_SERVER['PHP_SELF']) == "category.php") echo 'class="active"'; ?>><a href="category.php"><i class="fa-solid fa-folder-tree"></i>Categories</a></li>
                            <li <?php if(basename($_SERVER['PHP_SELF']) == "sub_category.php") echo 'class="active"'; ?>><a href="sub_category.php"><i class="fa-solid fa-sitemap"></i>Sub-Categories</a></li>
                            <li <?php if(basename($_SERVER['PHP_SELF']) == "brands.php") echo 'class="active"'; ?>><a href="brands.php"><i class="fa-solid fa-folder-open"></i>Brands</a></li>
                            <li <?php if(basename($_SERVER['PHP_SELF']) == "products.php") echo 'class="active"'; ?>><a href="products.php"><i class="fa-solid fa-bag-shopping"></i>Products</a></li>
                            <li <?php if(basename($_SERVER['PHP_SELF']) == "orders.php") echo 'class="active"'; ?>><a href="orders.php"><i class="fa-solid fa-cart-shopping"></i>Orders</a></li>
                            <li <?php if(basename($_SERVER['PHP_SELF']) == "users.php") echo 'class="active"'; ?>><a href="users.php"><i class="fa-solid fa-person"></i>Users</a></li>

                      
                            
                            <span id="sub-head">Authentication</span>
                            <li id="logouts" <?php if(basename($_SERVER['PHP_SELF']) == "logout.php") echo 'class="active"'; ?>><a href="php_files/logout.php" ><i class="fa-solid fa-right-from-bracket"></i>Log Out</a></li>
                            <li id="logouts" <?php if(basename($_SERVER['PHP_SELF']) == "changepassword.php") echo 'class="active"'; ?>><a href="changepassword.php" ><i class="fa-solid fa-arrow-down-up-lock"></i>Change Password</a></li>
               
                  
              
              
                        </ul>
                        <!-- <div id="text-head"><a href="facebook.com">Madira</a></div> -->
                      
                    </div>

                    <div class="col-md-10 col-sm-9 clearfix" id="admin-content">
