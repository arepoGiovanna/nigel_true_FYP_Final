<?php

include('connection.php');
$product_id = $_GET['updateid'];
//$product_id = $_GET['updateid'];
$sql = "SELECT * FROM product WHERE product_id=$product_id";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$product_name=$row['product_name'];
$product_desc=$row['product_desc'];
$product_cat=$row['product_cat'];
$product_brand=$row['product_brand'];
$sizes=$row['size'];
$color=$row['color'];
$category=$row['category'];
$product_qty=$row['product_qty'];
$unit_price=$row['unit_price'];
$product_img=$row['product_img'];

if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $size = $_POST['size'];
    $sizes=implode(',',$size);
    //echo $sizes;
    $color = $_POST['color'];
    $category = $_POST['category'];
    $product_qty = $_POST['product_qty'];
    $unit_price = $_POST['unit_price'];
    $product_img = $_POST['product_img'];

    $sql = "UPDATE product SET product_id=$product_id, product_name='$product_name', product_desc='$product_desc', product_cat='$product_cat', product_brand='$product_brand', size='$sizes', color='$color', category='$category', product_qty='$product_qty', unit_price='$unit_price', product_img='$product_img' WHERE product_id=$product_id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        //echo "updated successfully!";
        header('location:adminHomepage.php');
    } else {
        die(mysqli_error($con));
    }

}
?>

<!DOCTYPE html>

<head>
    <title> Online Clothing Store </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>
<body>
<?php include "adminNavigation.php" ?>

<div class="container" style="margin-top:5em">
    <div class="bg-light p-5 border rounded-lg m-3">
        <form method="POST" class="row gy-2 gx-3 align-items-center">
            <div class="mb-3">
                <h3 class="text-center text-primary mb-5">Product Info</h3>

                <!-----1st row-------->

                <div class="row g-3">
                    <div class="col-6">
                        <label for="input">Product Name</label>
                        <input type="text" name="product_name" class="form-control" placeholder="" value="<?php echo $product_name ?>"></input>
                    </div>
                    <div class="col-6">
                        <label for="input">Product Description</label>
                        <textarea name="product_desc" type="text" class="form-control" placeholder=""><?php echo $product_desc ?></textarea>
                    </div>
                </div>

                <!-----2nd row-------->
                <div class="mb-3"></div>

                <div class="row">
                    <div class="col-6">
                        <label for="">Product Category</label>
                        <select name="product_cat" class="form-select" >
                            <option value="">Select Product Category</option>
                            <option value="Men Apparel">Men Apparel</option>
                            <option value="Women Apparel">Women Apparel</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="input">Product Brand</label>
                        <input name="product_brand" type="text" class="form-control" placeholder="" value="<?php echo $product_brand ?>">
                    </div>
                </div>

                <!-----3rd row-------->

                <!------->

                <!------4th row---------->
                <div class="row">
                    <div class="mb-3"></div>
                    <div class="col-4">
                        <label for="">Category</label>
                        <select name="category" class="form-select">
                            <option value="">Select Category</option>
                            <option value="New Arrival">New Arrival</option>
                            <option value="Most Popular">Most Popular</option>
                            <option value="Trending">Trending</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <label for="input">Color</label>
                         <input type="text" name="color" class="form-control" placeholder="" value="<?php echo $color ?>">
                    </div>

                    <div class="col-4">
                        <div class="form-check">
                            <label class="form-check-label" for="">Size</label> <br>
                            <input type="checkbox" name="size[]" value="XS"> XS
                            <input type="checkbox" name="size[]" value="S"> S
                            <input type="checkbox" name="size[]" value="M"> M
                            <input type="checkbox" name="size[]" value="L"> L
                            <input type="checkbox" name="size[]" value="XL"> XL
                            <input type="checkbox" name="size[]" value="2XL"> 2XL
                            <input type="checkbox" name="size[]" value="3XL"> 3XL
                        </div>
                    </div>
                </div>

                <!-----5th row-------->
                <div class="row">
                    <div class="mb-3"></div>
                    <div class="col-6">
                        <label for="input">Quantity</label>
                        <div class="input-group">
                            <input type="number" name="product_qty" class="form-control" placeholder="" value="<?php echo $product_qty ?>">
                            <span class="input-group-text">pcs</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="input">Unit Price</label>
                        <div class="input-group">
                            <div class="input-group-text">RM</div>
                            <input type="float" name="unit_price" class="form-control" placeholder="" value="<?php echo $unit_price ?>">
                        </div>
                    </div>

                </div>

                <!-----6th row-------->
                <div class="form-row">
                    <div class="mb-3"></div>

                    <div class="form-group col-md-6">
                        <label for="Image" class="form-label">Product Image</label>
                        <input type="file" name="product_img" id="form_file" class="form-control" onchange="preview()">
                        <button onclick="clearImage()" class="btn btn-primary btn-md mt-3">Clear Image</button>
                    </div>
                    <img id="frame" src="" class="img-fluid" />
                    </div>
                </div>
            </div>
    </div>

    <div class="form-row"></div>
    <div class="text-center col-md-12" >
        <div class="form-group col-md-3 text-center text-right mt-5"></div>
        <button type="submit" class="btn btn-primary btn-md mb-4" name="submit">Submit</button>
        <button onclick="show_confirm()" type="submit" class="btn mb-4" role="button"><a class="btn btn-secondary" href="adminHomepage.php" class="text-light">Cancel</a></button>
    </div>


</form>
<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
    function clearImage() {
        document.getElementById('form_file').value = null;
        frame.src = "";
    }
</script>
<script>
    function show_confirm(){
        // build the confirm box
        var c=confirm("Are you sure you want to cancel the changes made?");

    }
</script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>
</html>
