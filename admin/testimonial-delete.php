<?php
session_start();
include("config/db.php");

// Check login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Check if testimonial_id exists
if (!isset($_GET['testimonial_id']) || empty($_GET['testimonial_id'])) {
    header("Location: testimonial-view.php");
    exit;
}

$testimonial_id = intval($_GET['testimonial_id']);

// Fetch testimonial image
$sql = "SELECT image FROM testimonials WHERE testimonial_id = $testimonial_id";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die("SELECT ERROR: " . mysqli_error($conn));
}

$data = mysqli_fetch_assoc($query);

// If testimonial exists
if ($data) {

    $imgPath = "uploads/testimonials/" . $data['image'];

    // Delete image file
    if (!empty($data['image']) && file_exists($imgPath)) {
        unlink($imgPath);
    }

    // Delete testimonial record
    $deleteQuery = mysqli_query($conn, "DELETE FROM testimonials WHERE testimonial_id = $testimonial_id");

    if (!$deleteQuery) {
        die("DELETE ERROR: " . mysqli_error($conn));
    }
}

// Redirect back to testimonial list
header("Location: testimonial-view.php?deleted=1");
exit;

?>
