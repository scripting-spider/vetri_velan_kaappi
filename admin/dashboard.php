<?php
session_start();
include("config/db.php");

// Check login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Fetch counts
$catCount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM categories"))['total'];
$prodCount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM products"))['total'];
$testCount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM testimonials"))['total'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Vetri Velan Kaappi</title>
</head>
<style>
    /* RESET */
/* GLOBAL */
body {
    margin: 0;
    background: #f5f6fa;
    font-family: "Inter", "Poppins", sans-serif;
    color: #222;
}

.main {
    padding: 25px;
}

/* GRID FOR CARDS */
.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 20px;
}

/* ======= PROFESSIONAL CARD ======= */
.card {
    background: #ffffff;
    border-radius: 14px;
    padding: 18px 20px;
    border: 1px solid #e6e6e6;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: 0.25s ease;
    position: relative;
    overflow: hidden;
}

/* Soft Professional Hover */
.card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 22px rgba(0,0,0,0.08);
    border-color: #E70000;
}

/* Red Accent Left Line */
.card::before {
    content: "";
    width: 4px;
    height: 100%;
    background: #E70000;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0.8;
}

/* Icon */
.card .icon {
    font-size: 36px;
    color: #E70000;
    margin-bottom: 5px;
}

/* Text */
.card h3 {
    margin: 0;
    font-size: 15px;
    font-weight: 500;
    color: #444;
}

.card h1 {
    margin: 3px 0 0;
    font-size: 28px;
    font-weight: 700;
    color: #111;
}

/* ======= RECENT SECTION ======= */
.recent-wrapper {
    margin-top: 35px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 22px;
}

/* Recent Box */
.recent-box {
    background: #fff;
    padding: 18px 20px;
    border-radius: 14px;
    border: 1px solid #e6e6e6;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: 0.25s ease;
}

.recent-box:hover {
    transform: translateY(-3px);
    border-color: #E70000;
    box-shadow: 0 6px 20px rgba(0,0,0,0.07);
}

.recent-box h3 {
    margin: 0 0 12px;
    font-size: 16px;
    font-weight: 600;
    color: #E70000;
}

/* Recent List */
.recent-box ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.recent-box ul li {
    padding: 8px 0;
    border-bottom: 1px solid #ededed;
    font-size: 14px;
    color: #333;
}

.recent-box ul li:last-child {
    border-bottom: none;
}

/* ======= RESPONSIVE ======= */
@media (max-width: 768px) {
    .cards {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
    .card h1 {
        font-size: 24px;
    }
    .recent-wrapper {
        grid-template-columns: 1fr;
    }
}

</style>
<body>
<?php include("topbar.php"); ?>

<div class="main">

    <div class="cards">

        <div class="card">
            <i class="fa-solid fa-layer-group icon"></i>
            <h3>Categories</h3>
            <h1><?= $catCount ?></h1>
        </div>

        <div class="card">
            <i class="fa-solid fa-box-open icon"></i>
            <h3>Products</h3>
            <h1><?= $prodCount ?></h1>
        </div>

        <div class="card">
            <i class="fa-solid fa-comments icon"></i>
            <h3>Testimonials</h3>
            <h1><?= $testCount ?></h1>
        </div>

    </div>


    <!-- RECENT ITEMS -->
    <div class="recent-wrapper">

        <div class="recent-box">
            <h3>Recent Products</h3>
            <ul>
                <?php
                $rp = mysqli_query($conn, "SELECT product_name FROM products ORDER BY product_id DESC LIMIT 5");
                while ($p = mysqli_fetch_assoc($rp)) {
                    echo "<li>{$p['product_name']}</li>";
                }
                ?>
            </ul>
        </div>

        <div class="recent-box">
            <h3>Recent Categories</h3>
            <ul>
                <?php
                $rc = mysqli_query($conn, "SELECT category_name FROM categories ORDER BY category_id DESC LIMIT 5");
                while ($c = mysqli_fetch_assoc($rc)) {
                    echo "<li>{$c['category_name']}</li>";
                }
                ?>
            </ul>
        </div>

        <div class="recent-box">
            <h3>Recent Testimonials</h3>
            <ul>
                <?php
                $rt = mysqli_query($conn, "SELECT name FROM testimonials ORDER BY testimonial_id DESC LIMIT 5");
                while ($t = mysqli_fetch_assoc($rt)) {
                    echo "<li>{$t['name']}</li>";
                }
                ?>
            </ul>
        </div>

    </div>

</div>



</body>
</html>
