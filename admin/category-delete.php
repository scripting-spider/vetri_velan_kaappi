<?php
session_start();
include("config/db.php");

// Check login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Check if category_id exists
if (!isset($_GET['category_id']) || empty($_GET['category_id'])) {
    header("Location: category-view.php");
    exit;
}

$category_id = intval($_GET['category_id']); // secure integer

// Fetch category data
$sql = "SELECT category_image FROM categories WHERE category_id = $category_id";
$query = mysqli_query($conn, $sql);

// If query failed → show SQL error
if (!$query) {
    die("SQL ERROR: " . mysqli_error($conn) . "<br>QUERY: " . $sql);
}

$data = mysqli_fetch_assoc($query);

// If record exists, delete image
if ($data) {

    $imagePath = "uploads/category/" . $data['category_image'];

    if (!empty($data['category_image']) && file_exists($imagePath)) {
        unlink($imagePath);
    }

    // Delete category record
    $deleteQuery = mysqli_query($conn, "DELETE FROM categories WHERE category_id = $category_id");

    if (!$deleteQuery) {
        die("DELETE ERROR: " . mysqli_error($conn));
    }
}

// Redirect after deletion
header("Location: category-view.php?deleted=1");
exit;

?>
