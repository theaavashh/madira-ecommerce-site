
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Montserrat:400,500,700,900" rel="stylesheet">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
</head>
<body>
<div id="header">
    <div class="container">
        <text id="header-text">|  Think  Before Drink    |  &nbsp    Coffee Black , Water Tap  Whiskey Neat |  &nbsp Save Water Drink Beer </text>
     
     <?php
      session_start();
        if(isset($_SESSION["user_role"])){ 
         ?>
            <div id="user-session">
        |
        <?php
             echo $_SESSION["username"]; 
        ?> 
        account |
     </div>
     <?php
     }
     ?>
   
        <div class="row">
               
            <div class="col-md-2  site-name">

               Madira.np
              
            </div>
          
            <div class="col-md-7">
                <form action="search.php" method="GET">
                <div class="input-group search">
                    <input type="text" class="form-control" id="searchfield" name="search" placeholder="Search for...">
                    <span class="input-group-btn">
                        <input class="btns btn-default" id="searchbutton"  type="submit" value="Search" />
                    </span>
                </div>
                </form>
            </div>
            <div class="col-md-3">
                <ul class="header-info">
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <?php
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }
                            if(isset($_SESSION["user_role"])){ ?>
                              <div id="user-name"><?php echo $_SESSION["username"]; ?> <i class="caret"></i></div>  
                            <?php  }else{ ?>
                                <i class="fa fa-user"></i>
                            <?php  } ?>

                        </a>
                        <ul class="dropdown-menu">
                            <!-- Trigger the modal with a button -->
                            <?php
                                if(isset($_SESSION["user_role"])){ ?>
                                    <li><a href="user_profile.php" class="" >My Profile</a></li>
                                    <li><a href="user_orders.php" class="" >My Orders</a></li>
                                    <li><a href="logout.php" class="user_logout" >Logout</a></li>
                            <?php  }else{ ?>
                                    <li><a data-toggle="modal" data-target="#userLogin_form" href="#">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                              <?php  } ?>

                        </ul>
                    </li>
                    <li>
    
                        <a href="wishlist.php"><i class="fa fa-heart"></i>
                            <?php if(isset($_COOKIE['wishlist_count'])){
                                    echo '<span>'.$_COOKIE["wishlist_count"].'</span>';
                                } ?>
                        </a>
                    </li>
                    <li>
                        <a href="cart.php"><i class="fa fa-shopping-cart"></i>
                            <?php if(isset($_COOKIE['cart_count'])){
                                    echo '<span>'.$_COOKIE["cart_count"].'</span>';
                                } ?>
                        </a>
                    </li>
                </ul>
            </div>
  
            <!-- Modal -->
            <div class="modal fade" id="userLogin_form" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body">
                            <!-- Form -->
                            <form  id="loginUser" method ="POST">
                                <div class="customer_login"> 
                                    <h2>login here</h2>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control username" placeholder="Username" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control password" placeholder="password" autocomplete="off" required>
                                    </div>
                                    <input type="submit" name="login" class="btn" value="login"/>
                                    <span>Don't Have an Account <a href="register.php">Register</a></span>
                                </div>
                            </form>
                            <!-- /Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modal -->
        </div>
    </div>
</div>
<div id="header-menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="menu-list">
                   
                    <?php
                    $db = new Database();
                    $db->select('sub_categories','*',null,'cat_products >=0 AND show_in_header = "1"',null,null);
                    $result = $db->getResult();
                    if(count($result) > 0){
                        foreach($result as $res){ ?>
                            <li><a href="category.php?cat=<?php echo $res['sub_cat_id']; ?>"><?php echo $res['sub_cat_title']; ?></a></li>
                        <?php    }
                    } ?>
          
                </ul>
            </div>
        </div>
    </div>
</div>