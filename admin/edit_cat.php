<?php
// include header file
include 'header.php'; ?>
    <div class="admin-content-container">
        <h3 class="admin-heading">Update category</h3>
        <?php
            $cat_id = $_GET['id'];
            $db = new Database();
            $db->select('categories','*',null,"cat_id ='{$cat_id}'",null,null);
            $result = $db->getResult();
            if ($result > 0) {
                foreach($result as $row){?>
                <div class="row">
                    <!-- Form -->
                    <form id="updateCategory" class="add-post-form col-md-6" method ="POST">
                        <input type="hidden" name="cat_id" value="<?php echo $row['cat_id']; ?>">
                        <div class="form-group">
                            <label id="label-category">Category Name</label>
                            <input type="text" name="cat_name" class="form-control category" value="<?php echo $row['cat_title']; ?>"  placeholder="Category Name" />
                        </div>
                        <input type="submit" name="sumbit" class="btn add-newCategory" value="Update" />
                    </form>
                    <!-- /Form -->
                </div>
                <?php
                }
            } else { ?>
                <div class="not-found">!!! Result Not Found !!!</div>
          <?php  } ?>
    </div>
<?php
//    include footer file
    include "footer.php";
?>
          
   

