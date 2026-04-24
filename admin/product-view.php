<?php
session_start();
include("config/db.php");

// Check login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

/* ------------------------------------
   PAGINATION SETTINGS
------------------------------------ */
$limit = 10; // items per page
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$start = ($page - 1) * $limit;

/* ------------------------------------
   FETCH TOTAL PRODUCTS
------------------------------------ */
$count_result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM products");
$total_rows = mysqli_fetch_assoc($count_result)['total'];
$total_pages = ceil($total_rows / $limit);

/* ------------------------------------
   FETCH PAGED PRODUCTS
------------------------------------ */
$sql = mysqli_query($conn, "
    SELECT p.*, c.category_name 
    FROM products p
    LEFT JOIN categories c ON p.category_id = c.category_id
    ORDER BY p.product_id DESC
    LIMIT $start, $limit
");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>View Products - Vetri Velan Kaappi</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<style>
/* GLOBAL */
body {margin:0; background:#f5f6fa; font-family:"Inter",sans-serif;}
.main {padding:25px; justify-items:center;}
.table-box {
    background:#fff;
    padding:25px;
    border-radius:14px;
    border:1px solid #e6e6e6;
    box-shadow:0 4px 20px rgba(0,0,0,0.06);
    animation:fadeIn 0.4s ease;
    max-width:1600px !important;
}
@keyframes fadeIn {from {opacity:0; transform:translateY(12px);} to {opacity:1; transform:translateY(0);}}

/* ADD BUTTON */
.btn-add {
    background:#E70000;
    padding:12px 16px;
    color:#fff;
    border-radius:8px;
    font-size:14px;
    display:inline-flex;
    align-items:center;
    gap:8px;
    text-decoration:none;
    margin-bottom:16px;
    transition:0.25s ease;
    font-weight:600;
}
.btn-add:hover {background:#9A0000; box-shadow:0 6px 20px rgba(231,0,0,0.25);}

/* TABLE */
table {width:100%; border-collapse:collapse;}
table th {
    background:#fff;
    color:#E70000;
    padding:14px 10px;
    border-bottom:2px solid #E70000;
    text-align:left;
    font-size:15px;
    font-weight:600;
}
table td {
    padding:14px 10px;
    font-size:14px;
    border-bottom:1px solid #eee;
}

/* IMAGE */
.prod-img {width:55px; height:55px; border-radius:6px; object-fit:cover; border:1px solid #ddd;}

/* ACTION BUTTONS */
.action-btn {
    display:inline-flex;
    width:36px;
    height:36px;
    border-radius:8px;
    align-items:center;
    justify-content:center;
    font-size:15px;
    margin-right:6px;
    cursor:pointer;
    text-decoration:none;
    transition:0.25s ease;
}
.action-edit {background:rgba(0,132,255,0.12); color:#007bff;}
.action-edit:hover {background:#007bff; color:#fff;}
.action-delete {background:rgba(231,0,0,0.15); color:#E70000;}
.action-delete:hover {background:#E70000; color:#fff;}

.status-active {
    color: #fff;
    background-color: #28a745; /* Green */
    padding: 4px 8px;
    border-radius: 4px;
    font-weight: bold;
    font-size: 0.9em;
}
.status-inactive {
    color: #fff;
    background-color: #dc3545; /* Red */
    padding: 4px 8px;
    border-radius: 4px;
    font-weight: bold;
    font-size: 0.9em;
}

/* MOBILE CARD VIEW */
.card-list {display:none;}
@media (max-width:820px){
    table.desktop-table {display:none;}
    .card-list {display:grid; gap:18px;}
    .card-row {
        background:#fff;
        padding:16px;
        border-radius:14px;
        border:1px solid #e6e6e6;
        box-shadow:0 4px 15px rgba(0,0,0,0.05);
        animation:fadeIn 0.4s ease;
    }
    .card-row h4 {margin:0 0 8px; font-size:17px; font-weight:600; color:#E70000;}
    .card-item {margin-bottom:6px; font-size:14px; color:#444;}
    .card-actions {margin-top:12px; display:flex; gap:10px;}
}

/* PAGINATION */
.pagination {margin-top:25px; display:flex; gap:8px; justify-content:center; flex-wrap:wrap;}
.page-btn, .page-number {
    padding:8px 14px;
    border-radius:8px;
    border:1px solid #E70000;
    color:#E70000;
    text-decoration:none;
    font-size:14px;
    transition:0.25s ease;
    font-weight:500;
}
.page-btn:hover, .page-number:hover {background:#E70000; color:#fff;}
.page-number.active {background:#E70000; color:#fff; pointer-events:none;}
</style>

<body>
<?php include("topbar.php"); ?>

<div class="main">
<div class="table-box">

    <a href="product-add.php" class="btn-add">
        <i class="fa-solid fa-plus"></i> Add New Product
    </a>

    <!-- DESKTOP TABLE -->
    <table class="desktop-table">
        <tr>
            <th>S.No</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Image</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>

        <?php
        $i = $start + 1;
        mysqli_data_seek($sql,0);
        while($row = mysqli_fetch_assoc($sql)){ ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $row['product_name'] ?></td>
            <td><?= $row['category_name'] ?></td>
            <td><?= $row['description'] ?></td>
            <td>
                <?php if($row['product_image']){ ?>
                    <img src="uploads/products/<?= $row['product_image'] ?>" class="prod-img">
                <?php } else { echo "No Image"; } ?>
            </td>
            <td>
                <?php if($row['status'] == '1'){ ?>
                    <span class="status-active">Active</span>
                <?php } else { ?>
                    <span class="status-inactive">Inactive</span>
                <?php } ?>
            </td>
            <td>
                <a href="product-edit.php?product_id=<?= $row['product_id'] ?>" class="action-btn action-edit">
                    <i class="fa-solid fa-pen"></i>
                </a>
                <a href="product-delete.php?product_id=<?= $row['product_id'] ?>" class="action-btn action-delete"
                    onclick="return confirm('Are you sure?')">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- MOBILE CARD VIEW -->
    <div class="card-list">
        <?php
        mysqli_data_seek($sql,0);
        $i=$start+1;
        while($row=mysqli_fetch_assoc($sql)){ ?>
        <div class="card-row">
            <h4><?= $row['product_name'] ?></h4>
            <div class="card-item"><strong>S.No:</strong> <?= $i++ ?></div>
            <div class="card-item"><strong>Category:</strong> <?= $row['category_name'] ?></div>
            <div class="card-item"><strong>Description:</strong> <?= $row['description'] ?></div>
            <div class="card-item">
                <strong>Image:</strong><br>
                <?php if($row['product_image']){ ?>
                    <img src="uploads/products/<?= $row['product_image'] ?>" class="prod-img" style="margin-top:6px;">
                <?php } else { echo "No Image"; } ?>
            </div>
            <div class="card-item">
                <strong>Status:</strong>
                <?php if($row['status'] == '1'){ ?>
                    <span class="status-active">Active</span>
                <?php } else { ?>
                    <span class="status-inactive">Inactive</span>
                <?php } ?>
            </div>
            <div class="card-actions">
                <a href="product-edit.php?product_id=<?= $row['product_id'] ?>" class="action-btn action-edit">
                    <i class="fa-solid fa-pen"></i>
                </a>
                <a href="product-delete.php?product_id=<?= $row['product_id'] ?>" class="action-btn action-delete"
                    onclick="return confirm('Are you sure?')">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>

    <!-- PAGINATION -->
    <div class="pagination">
        <?php if($page>1): ?>
            <a href="?page=<?= $page-1 ?>" class="page-btn">« Prev</a>
        <?php endif; ?>

        <?php for($p=1;$p<=$total_pages;$p++): ?>
            <a href="?page=<?= $p ?>" class="page-number <?= ($p==$page?'active':'') ?>"><?= $p ?></a>
        <?php endfor; ?>

        <?php if($page<$total_pages): ?>
            <a href="?page=<?= $page+1 ?>" class="page-btn">Next »</a>
        <?php endif; ?>
    </div>

</div>
</div>
</body>
</html>
