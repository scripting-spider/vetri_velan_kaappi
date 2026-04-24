<?php
session_start();
include("config/db.php");

// Check login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Check if product_id exists
if (!isset($_GET['product_id']) || empty($_GET['product_id'])) {
    header("Location: product-view.php");
    exit;
}

$product_id = intval($_GET['product_id']);

// Fetch product image
$sql = "SELECT product_image FROM products WHERE product_id = $product_id";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die("SELECT ERROR: " . mysqli_error($conn));
}

$data = mysqli_fetch_assoc($query);

// If product exists
if ($data) {

    $imgPath = "uploads/products/" . $data['product_image'];

    // Delete image file
    if (!empty($data['product_image']) && file_exists($imgPath)) {
        unlink($imgPath);
    }

    // Delete product record
    $deleteQuery = mysqli_query($conn, "DELETE FROM products WHERE product_id = $product_id");

    if (!$deleteQuery) {
        die("DELETE ERROR: " . mysqli_error($conn));
    }
}

// Redirect back to product list
header("Location: product-view.php?deleted=1");
exit;

?>
