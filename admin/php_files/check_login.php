<?php

    include 'loginClass.php';


if(isset($_POST['login'])){
   
    if(!isset($_POST['name']) || empty($_POST['name'])){
        echo json_encode(array('error'=>'name_empty')); exit;
    }elseif(!isset($_POST['pass']) || empty($_POST['pass'])){
        echo json_encode(array('error'=>'pass_empty')); exit;
    }else{
        
        $db = new Login(); 
        $username = $db->escapeString($_POST["name"]);
        $password = md5($db->escapeString($_POST["pass"])); 

        $db->getAdminLogin('admin','admin_name',null,"username = '$username' AND password = '$password'",null,0); 
        $result = $db->getResult();

        if(!empty($result)){
            session_start();
            $_SESSION["admin_name"] = $result[0]['admin_name'];
            $_SESSION["admin_role"] = 'admin'; /* for admin */
            echo json_encode(array('success'=>'true')); exit;
        }else{
            echo json_encode(array('error'=>'flase')); exit;
        }
    }
}


if(isset($_POST['changePass'])){
    // if(!isset($_POST['old_pass']) || empty($_POST['old_pass'])){
    //     echo json_encode(array('error'=>'Old password is empty.')); exit;
    if(!isset($_POST['new_pass']) || empty($_POST['new_pass'])){
        echo json_encode(array('error'=>'New password is empty.')); exit;
    }else{

        $db = new Login(); 
        $old = md5($db->escapeString($_POST["old_pass"]));
        $new = md5($db->escapeString($_POST["new_pass"]));


        $db->update('admin',array('password'=>$new));
        $response = $db->getResult();
        if(!empty($response)){
            echo json_encode(array('success'=>'1')); exit;
        }
    }
}



?>
