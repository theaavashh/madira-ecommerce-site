<?php
include_once 'php_files/config.php';

session_start();
if(isset($_SESSION['admin_name'])) {
    header("Location: ".$base_url."admin/dashboard.php");
}
?>
<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bubble Tea Station</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps:wght@700&display=swap" rel="stylesheet">
    </head>
    <body class="login-body">
        <div class="container ">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                  
                    <div class="login-form">
                    <img src="images/loginImage.png" class="loginImage" alt="image">
                    
                        <form id="adminLogin" method ="POST" autocomplete="off">
                        <header id="heading">Madira.np</header>
                            <div class="form-group">
                            <label>Username</label>
                                <input type="text" class="form-control username" placeholder="Username" >
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control password" placeholder="password" >
                            </div>
                            <input type="submit" name="login" class="btn" value="login"/>
                        </form>
                        <!-- /Form -->
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/admin_actions.js"></script>
    </body>
</html>
