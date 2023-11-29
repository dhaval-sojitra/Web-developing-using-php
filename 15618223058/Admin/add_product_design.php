<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Product Information</h2>
        <form action="add_product_code.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name:</label>
                <input type="text" class="form-control"  name="productName">
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Product Description:</label>
                <textarea class="form-control"  name="productDescription" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="productCategory" class="form-label">Product Category:</label>
                <input type="text" class="form-control" name="productcategory">

            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Product Price:</label>
                <input type="number" class="form-control" name="productPrice">
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Product Image:</label>
                <input type="file" name="pro_img" >
            </div>
            <div class="mb-3">
                <label for="productSKU" class="form-label">Product SKU:</label>
                <input type="text" class="form-control" name="productSKU">
            </div>
            <div class="mb-3">
                <label for="productbarcode" class="form-label">Product Barcode:</label>
                <input type="text" class="form-control" name="productbarcode">
            </div>
            <div class="mb-3">
                <label for="productweight" class="form-label">Product Weight:</label>
                <input type="text" class="form-control" name="productweight">
            </div>
            <div class="mb-3">
                <label for="productdimensions" class="form-label">Product Dimensions:</label>
                <input type="text" class="form-control" name="productdimension">
            </div>
            <div class="mb-3">
                <label for="productdq" class="form-label">Product Quantity:</label>
                <input type="text" class="form-control" name="productquantity">
            </div>
            <div class="mb-3">
                <label for="productdv" class="form-label">Product Variants:</label>
                <input type="text" class="form-control" name="productvariants">
            </div>
            <div class="mb-3">
                <label for="productds" class="form-label">Product Shipping Information:</label>
                <input type="text" class="form-control" name="productshippinginfo">
            </div>
            <div class="mb-3">
                <label for="productds" class="form-label">Product SEO Information:</label>
                <input type="text" class="form-control" name="productseoinformation">
            </div>
            <div class="mb-3">
                <label for="productdb" class="form-label">Product Brand:</label>
                <input type="text" class="form-control" name="productbrand">
            
            </div>
            <div class="mb-3">
                <label for="productdf" class="form-label">Product Features:</label>
                <input type="text" class="form-control" name="productfeatures">
            </div>
            <div class="mb-3">
                <label for="productdb" class="form-label">Product Benifits:</label>
                <input type="text" class="form-control" name="productbenifits">
            </div>
            <div class="mb-3">
                <label for="relatedproduct" class="form-label">Related Product:</label>
                <input type="text" class="form-control" name="relatedproduct">
            </div>
            <div class="mb-3">
                <label for="productreviews" class="form-label">Product Reviews:</label>
                <input type="text" class="form-control" name="productreviews">
            </div>

            <div align="center">
            <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
