<?php include 'config.php'; ?>
<?php include 'header.php'; ?>


<?php

session_start();



$user_id=$_SESSION['username'];
if(isset($_POST['pay'])){
    $payment_amount=$_POST['product_total'];
    $product_title=$_POST['product_title'];
    $debit_no=$_POST['card_number'];
    $address=$_POST['delivery_address'];
    $product_qty=$_POST['product_qty'];


    $db=new Database();
    $db->insert('payments',array('payment_product'=>$product_title,'payment_amount'=>$payment_amount,'debit_number'=>$debit_no,'payment_status'=>'Confirm','user_id'=>$user_id));
     $response = $db->getResult();



    $db=new Database();
    $db->insert('order_products',array('product_title'=>$product_title,'product_qty'=>$product_qty,'total_amount'=>$payment_amount,'product_user'=>$user_id,'order_date'=>'August 20','debit_number'=>$debit_no,'delivery_address'=>$address));
    $response=$db->getResult();

  

    if($response){
        ?>
        <div class="alert alert-success"  id="pay-success"><?php echo 'Payment Success!   Thank You for shopping with us'?></div>;
        <?php
    }


    

}


?>



<div class="product-cart-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 clearfix">
                <h2 class="section-head">Proceed to Pay</h2>
             
                <text id="pay-text">Madira.np   Pay</text>
                                <table class="table " id="table-pay">
                                    <thead>
                                    <tr>
                                        <td>Bill in the name of:</td>
                                        <td><?php
                                        session_start();
                                        $name=$_SESSION['username'];
                                         echo $name;?></td>
                                    </tr>
                                    <tr>
                                        <td>Total No of Item:</td>
                                        <td><?php echo $_POST['product_qty'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Product title:</td>
                                        <td><?php echo $_POST['product_title'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Amount</td>
                                        <td>Rs. 70</td>
                                    </tr>
                                    <tr>
                                        <td>Total Amount:</td>
                                        <td>Rs.<?php echo $_POST['product_total']+70;?></td>
                                    </tr>
                                    </thead>
</table>




<h4>Enter Credential </h4>
<form action="payment.php" method="POST">

<input type="hidden" name="product_total" value="<?php echo $_POST['product_total'];?>">
<input type="hidden" name="product_qty" value="<?php echo $_POST['product_qty'];?>">
<input type="hidden" name="product_title" value="<?php echo $_POST['product_title'];?>">
    <label id="pay-form">Card Number:</label>
    <input type="text" placeholder="Enter Card No" id="pay-input" name="card_number" required/>
    <br>

    <label id="pay-form">Shipping Address:</label>
    <input type="text" placeholder="Enter Shipping Address" id="pay-input-ship" name="delivery_address" required/>
    <button name="pay" class="btn btn-primary pay-btn" name="pay">Pay now!</button>
</form>
</div>
</div>
</div>
                                  
</div>


