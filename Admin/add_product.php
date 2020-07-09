<?php
    include_once "function.php";
    include "header.php";
    include "footer.php";
    add_product();
?>
    <div id="upload-zone" class="container col-sm-10">
        <fieldset>
            <form action="?upload=file" method="POST" enctype="multipart/form-data">
                <div class="menu">
                    <label>Ten: </label>
                    <input type="text" name="car_name" class="form-control">
                </div>                  
                <div class="menu">
                    <label>Price: </label>
                    <input type="price" name="price" class="form-control">
                </div>
                <div class="menu">
                    <label>Content: </label>
                    <textarea name="content" rows="4" class="form-control"></textarea>
                </div>                   
                <div class="menu">
                    <input multiple type="file" name="image">
                </div>
                <div>
                    <input type="submit" value="Upload File" name="up">
                </div>                 
            </form>
        </fieldset>
    </div>      