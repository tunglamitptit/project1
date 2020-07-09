<?php
    include "function.php";
    include "connect.php";
    include "header.php";
    include "footer.php";
    if(isset($_GET['edit_id'])){ 
        $id = $_GET['edit_id'];
        $result = $conn->query("SELECT * FROM product_listing WHERE ID='$id'");
        $row = $result->fetch_array();
        edit_product($id);
    }
?>
    <div id="upload-zone" class="container col-sm-10">
        <fieldset>
            <form action="?upload=file" method="POST" enctype="multipart/form-data">
                <div class="menu">
                    <label>Ten: </label>
                    <input type="text" name="car_name" class="form-control" value="<?php echo $row['Car_name']?>">
                </div>                  
                <div class="menu">
                    <label>Price: </label>
                    <input type="price" name="price" class="form-control" value="<?php echo $row['Price']?>">
                </div>
                <div class="menu">
                    <label>Content: </label>
                    <textarea name="content" rows="4" class="form-control"></textarea>
                </div>                   
                <div class="menu">
                    <input multiple type="file" name="image">
                </div>
                <div>
                    <input type="submit" value="process" name="up">
                </div>                 
            </form>
        </fieldset>
    </div>      
