<?php
// include header file
include 'header.php'; ?>
        <div class="admin-content-container">
            <h2 class="admin-heading">All Orders</h2>
            <?php
            $limit = 5;
            $db = new Database();
            $db->sql('SELECT `order_id`, `product_title`, `product_qty`, `total_amount`, `product_user`, `order_date`, `debit_number`, `delivery_address` FROM `order_products`');
                $result = $db->getResult();
                if(count($result) > 0) {  ?>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <th>ORDER No.</th>
                            <th width="300px">Product Title</th>
                            <th>Product QTY.</th>
                            <th>Total Amount</th>
                            <th>Customer Details</th>
                            <th>Order Date</th>
                            <th>Debit Number</th>
                            <th>Delivery Address</th>
                            </thead>
                            <tbody>
                            <?php foreach($result as $row) { 
                                for($i=0;$i<count($row);$i++){
                                ?>
                                
                                <tr>
                                    <td><?php echo 'ODR00'.$row[$i]['order_id']; ?></td>
                                    <td>
                                    <?php echo $row[$i]['product_title'];?></td>
                            
                                    <td><?php echo $row[$i]['product_qty'];?></td>
                                    <td><?php echo $row[$i]['total_amount'];?></td>
                                    <td><?php echo $row[$i]['product_user'];?></td>
                                    <td><?php echo $row[$i]['order_date'];?></td>
                                    <td><?php echo $row[$i]['debit_number'];?></td>
                                    <td><?php echo $row[$i]['delivery_address'];?></td>
                                  
                                    
                                   
                                </tr>
                            <?php } 
                            }?>
                            </tbody>
                        </table>
                    <?php
                }else { ?>
                        <div class="not-found">!!! No Orders Found !!!</div>
                <?php } ?>
               
<?php
//    include footer file
    include "footer.php";
?>
