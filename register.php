<?php
include 'config.php';
session_start();
if(isset($_SESSION['user_id']) && $_SESSION['user_role'] == 'user') {
    include 'config.php';
    header("Location: " . $hostname."/index.php");
}else{

include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
           
            <!-- Form -->
          
            <form id="register_sign_up" class="signup_form" method ="POST" autocomplete="off">
              
                <div class="form-group form-firstname">
                <h2>Create Your Account</h2>
                    <label id="label-firstname">First Name</label><br>
                    <input type="text" name="f_name" class="form-control first_name" placeholder="First Name"  />
                </div>
                <div class="form-group">
                    <label id="label-lastname">Last Name</label>
                    <input type="text" name="l_name" class="form-control last_name" placeholder="Last Name"  />
                </div>
                <div class="form-group">
                    <label id="label-username">Username</label>
                    <input type="text" name="username" class="form-control user_name" placeholder="User Name"  />
                </div>
                <div class="form-group">
                    <label id="label-password">Password</label>
                    <input type="password" name="password" class="form-control pass_word" placeholder="Password"  />
                </div>
                <div class="form-group">
                    <label id="label-mobile">Mobile</label>
                    <input type="phone" name="mobile" class="form-control mobile" placeholder="Mobile" >
                </div>
                <div class="form-group">
                    <label id="label-address">Address</label>
                    <input type="text" name="address" class="form-control address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label id="label-city">City</label>
                    <input type="text" name="city" class="form-control city" placeholder="City">
                </div>
                <input type="submit" name="signup" class="btn" value="sign up"/>
            </form>
            <!-- /Form -->
        </div>
    </div>
</div>
    <?php include 'footer.php';
}

?>
