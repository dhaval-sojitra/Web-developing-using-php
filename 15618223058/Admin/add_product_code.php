<?php

$productname = $_POST['productName'];
$productdescription = $_POST['productDescription'];
$productcategory = $_POST['productcategory'];
$productprice = $_POST['productPrice'];
$productSKU = $_POST['productSKU'];
$productbarcode = $_POST['productbarcode'];
$productweight = $_POST['productweight'];
$productdimension = $_POST['productdimension'];
$productquantity = $_POST['productquantity'];
$productvariants = $_POST['productvariants'];
$productshippinginfo = $_POST['productshippinginfo'];
$productseoinformation = $_POST['productseoinformation'];
$productbrand = $_POST['productbrand'];
$productfeatures = $_POST['productfeatures'];
$productbenifits = $_POST['productbenifits'];
$relatedproduct = $_POST['relatedproduct'];
$productreviews = $_POST['productreviews'];
$p_img = $_FILES['pro_img']['name'];
// $tempname = $_FILES["pro_img"]["tmp_name"];
// $folder = "./image/" . $p_img;
// move_uploaded_file($tempname,$folder);

$con = mysqli_connect("localhost","root","","mca");
$query = "INSERT INTO add_product(`product_name`, `product_description`, `product_category`, `product_price`, `product_sku`, `product_barcode`, `product_weight`, `product_dimension`, `product_quantity`, `product_variants`, `shipping_info`, `seo_info`, `product_brand`, `product_features`, `product_benifits`, `related_product`, `product_reviews`,`image_filenames`)
 VALUES ('$productname','$productdescription','$productcategory','$productprice','$productSKU','$productbarcode','$productweight','$productdimension','$productquantity','$productvariants', '$productshippinginfo','$productseoinformation','$productbrand','$productfeatures','$productbenifits','$relatedproduct','$productreviews','$p_img')";
$execute = mysqli_query($con,$query);
print_r($p_img);

if($execute==true){
    echo "Success";
}
else{
    echo "Failed";
}




?>