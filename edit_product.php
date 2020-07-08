<?php
    include 'function.php';
    if(isset($_GET['edit'])){ 
        $id = $_GET['edit'];
        $result = $conn->query("SELECT * FROM product_listing WHERE ID='$id'");
        $row = $result->fetch_array();
        edit_product($id);
    }
?>

<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">       
        <link rel="stylesheet" type="text/css" href="./admin.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    </head>
    <body>
        <div id="upload-zone" class="container">
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
    </body>
</html>v>