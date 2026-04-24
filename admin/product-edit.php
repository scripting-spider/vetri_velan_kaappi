<?php
session_start();
include("config/db.php");

// Check login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Get product_id
if (!isset($_GET['product_id'])) {
    header("Location: product-view.php");
    exit;
}

$product_id = intval($_GET['product_id']);

// Fetch product data
$query = mysqli_query($conn, "SELECT * FROM products WHERE product_id = $product_id");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Product not found!");
}

// Fetch categories
$catQuery = mysqli_query($conn, "SELECT category_id, category_name FROM categories WHERE status=1 ORDER BY category_name ASC");

$msg = "";

// Update form submission
if (isset($_POST['update'])) {

    $product_name = trim($_POST['product_name']);
    $category_id  = intval($_POST['category_id']);
    $price        = trim($_POST['price']);
    $description  = trim($_POST['description']);
    $status       = intval($_POST['status']);

    // Image handling
    $product_image = $data['product_image']; // default old image
    if (!empty($_POST['cropped_image'])) {

        // Delete old image
        $oldPath = "uploads/products/" . $data['product_image'];
        if ($data['product_image'] != "" && file_exists($oldPath)) {
            unlink($oldPath);
        }

        // Save new cropped image
        $base64 = $_POST['cropped_image'];
        $img = str_replace('data:image/png;base64,', '', $base64);
        $img = str_replace(' ', '+', $img);
        $imageData = base64_decode($img);

        $product_image = time() . "_product.png";
        $path = "uploads/products/" . $product_image;
        file_put_contents($path, $imageData);
    }

    // Update DB
    $sql = "UPDATE products SET
            product_name = '$product_name',
            category_id = $category_id,
            price = '$price',
            description = '$description',
            product_image = '$product_image',
            status = $status
            WHERE product_id = $product_id";

    if (mysqli_query($conn, $sql)) {
        header("Location: product-view.php?msg=updated");
        exit;
    } else {
        $msg = "Error updating product: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Product - Vetri Velan Kaappi</title>

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- CropperJS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" />

<style>
/* GLOBAL */
body {
    margin: 0;
    padding: 0;
    background: #f5f6fa;
    font-family: "Inter", sans-serif;
}

/* MAIN */
.main {
    padding: 30px;
}

/* FORM CONTAINER */
.container-box {
    width: 100%;
    max-width: 650px;
    margin: auto;
    background: #fff;
    padding: 28px;
    border-radius: 14px;
    border: 1px solid #e6e6e6;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    animation: fadeIn 0.5s ease;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(12px); }
    to { opacity: 1; transform: translateY(0); }
}

/* PAGE HEADER */
.page-header {
    margin-bottom: 20px;
}

.page-header h2 {
    margin: 0;
    font-size: 24px;
    font-weight: 700;
    color: #E70000;
    display: flex;
    align-items: center;
    gap: 10px;
}

.page-header p {
    margin-top: 6px;
    font-size: 14px;
    color: #555;
}

/* SUCCESS MESSAGE */
.msg {
    padding: 12px 15px;
    background: #e9ffe9;
    border-left: 4px solid #2ecc71;
    color: #2e7d4f;
    margin-bottom: 15px;
    border-radius: 8px;
    font-size: 14px;
}

/* LABEL */
label {
    display: block;
    margin-top: 18px;
    margin-bottom: 6px;
    font-weight: 600;
    font-size: 15px;
    color: #444;
}

/* INPUT & TEXTAREA */
.form-control {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    border: 1px solid #ddd;
    font-size: 15px;
    transition: 0.25s ease;
}

.form-control:focus {
    border-color: #E70000;
    box-shadow: 0 0 6px rgba(231,0,0,0.25);
}

textarea.form-control {
    min-height: 100px;
}

/* PREVIEW IMAGE */
.preview-container {
    margin-top: 14px;
    text-align: center;
}

#preview-image, .current-image {
    width: 100%;
    max-height: 320px;
    object-fit: contain;
    display: block;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    margin-bottom: 12px;
}

/* CROP BUTTON */
#cropBtn {
    display: none;
    margin-top: 14px;
    padding: 10px 16px;
    background: #E70000;
    border-radius: 10px;
    color: white;
    border: none;
    font-size: 14px;
    cursor: pointer;
    font-weight: 600;
    transition: 0.25s ease;
}

#cropBtn:hover {
    background: #A50000;
}

/* SUBMIT BUTTON */
.btn-submit {
    margin-top: 25px;
    padding: 12px 18px;
    width: 100%;
    border: none;
    outline: none;
    background: #E70000;
    color: white;
    font-size: 17px;
    font-weight: 700;
    border-radius: 12px;
    cursor: pointer;
    transition: 0.25s ease;
}

.btn-submit:hover {
    background: #A50000;
    box-shadow: 0 6px 20px rgba(231,0,0,0.25);
}

/* BACK BUTTON */
.btn-back {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 18px;
    padding: 10px 14px;
    background: #aaa;
    color: #fff;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.25s;
}

.btn-back:hover {
    background: #888;
}

/* Responsive */
@media (max-width: 600px) {
    .container-box {
        padding: 20px;
    }

    .page-header h2 {
        font-size: 22px;
    }
}
</style>

</head>
<body>

<?php include("topbar.php"); ?>

<div class="main">

    <div class="container-box">

        <!-- BACK BUTTON -->
        <a href="product-view.php" class="btn-back"><i class="fa-solid fa-arrow-left"></i> Back to List</a>

        <!-- PAGE HEADER -->
        <div class="page-header">
            <h2><i class="fa-solid fa-box"></i> Edit Product</h2>
            <p>Update product details or upload a new square image using the crop tool.</p>
        </div>

        <?php if ($msg != "") { ?>
            <p class="msg"><i class="fa-solid fa-circle-check"></i> <?= $msg ?></p>
        <?php } ?>

        <form method="POST">

            <!-- Product Name -->
            <label><i class="fa-solid fa-tag"></i> Product Name</label>
            <input type="text" name="product_name" class="form-control" value="<?= $data['product_name'] ?>" required>

            <!-- Category -->
            <label><i class="fa-solid fa-folder"></i> Category</label>
            <select name="category_id" class="form-control" required>
                <?php while ($cat = mysqli_fetch_assoc($catQuery)) { ?>
                    <option value="<?= $cat['category_id'] ?>" <?= ($cat['category_id']==$data['category_id'])?'selected':'' ?>>
                        <?= $cat['category_name'] ?>
                    </option>
                <?php } ?>
            </select>

            <!-- Price -->
            <label><i class="fa-solid fa-money-bill-wave"></i> Price</label>
            <input type="text" name="price" class="form-control" value="<?= $data['price'] ?>" required>

            <!-- Description -->
            <label><i class="fa-solid fa-align-left"></i> Description</label>
            <textarea name="description" class="form-control"><?= $data['description'] ?></textarea>

            <!-- Current Image -->
            <label><i class="fa-solid fa-image"></i> Current Image</label>
            <?php if ($data['product_image'] != "") { ?>
                <img src="uploads/products/<?= $data['product_image'] ?>" class="current-image">
            <?php } else { echo "No Image"; } ?>

            <!-- New Image Upload -->
            <label><i class="fa-solid fa-upload"></i> Upload New Image</label>
            <input type="file" id="upload-image" class="form-control" accept="image/*">

            <!-- Preview -->
            <div class="preview-container">
                <img id="preview-image">
            </div>

            <!-- Crop Button -->
            <button type="button" id="cropBtn"><i class="fa-solid fa-scissors"></i> Crop Image</button>

            <!-- Hidden Cropped Image -->
            <input type="hidden" name="cropped_image" id="cropped_image">

            <!-- Status -->
            <label><i class="fa-solid fa-toggle-on"></i> Status</label>
            <select name="status" class="form-control">
                <option value="1" <?= ($data['status']==1)?'selected':'' ?>>Active</option>
                <option value="0" <?= ($data['status']==0)?'selected':'' ?>>Inactive</option>
            </select>

            <!-- Submit Button -->
            <button type="submit" name="update" class="btn-submit"><i class="fa-solid fa-check"></i> Update Product</button>

        </form>

    </div>

</div>

<!-- Cropper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

<script>
let cropper;
const upload = document.getElementById("upload-image");
const preview = document.getElementById("preview-image");
const cropBtn = document.getElementById("cropBtn");
const croppedInput = document.getElementById("cropped_image");

upload.addEventListener("change", function(e) {
    const file = e.target.files[0];
    if (!file) return;

    preview.src = URL.createObjectURL(file);
    preview.style.display = "block";

    if (cropper) cropper.destroy();

    setTimeout(() => {
        cropper = new Cropper(preview, {
            aspectRatio: 1,
            viewMode: 1,
            movable: true,
            zoomable: true,
            scalable: false,
            background: false,
        });
    }, 100);

    cropBtn.style.display = "inline-block";
});

// Handle Crop
cropBtn.addEventListener("click", function() {
    const canvas = cropper.getCroppedCanvas({
        width: 600,
        height: 600,
    });

    preview.src = canvas.toDataURL("image/png");
    croppedInput.value = canvas.toDataURL("image/png");

    cropper.destroy();
    cropBtn.style.display = "none";
});
</script>

</body>
</html>
