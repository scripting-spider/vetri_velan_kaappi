<?php
session_start();
include("config/db.php");

if (isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit;
}

$error = "";

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
    $row = mysqli_fetch_assoc($query);

    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['admin'] = $row['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login - Vetri Velan Kaappi</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
    /* RESET */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: linear-gradient(135deg, #E70000, #FF3B3B, #E70000);
        animation: fadeIn 1s ease-in-out;
    }

    /* TOP LEFT LOGO */
    .top-logo {
        position: fixed;
        top: 20px;
        left: 20px;
        z-index: 999;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .top-logo img {
        height: 55px;
        width: auto;
        transition: 0.3s ease;
    }

    .top-logo img:hover {
        transform: scale(1.08);
    }

    /* HOME ICON */
    .home-icon {
        font-size: 28px;
        color: #fff;
        background: rgba(0,0,0,0.25);
        padding: 10px 12px;
        border-radius: 8px;
        backdrop-filter: blur(4px);
        cursor: pointer;
        transition: 0.3s ease;
    }

    .home-icon:hover {
        background: rgba(0,0,0,0.4);
        transform: scale(1.1);
    }

    .container {
        display: flex;
        width: 900px;
        height: 550px;
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        animation: fadeIn 1s ease-in-out;
    }

    /* LEFT IMAGE */
    .image-section {
        flex: 1;
        background: url('https://www.thecaffeinebaar.com/cdn/shop/articles/Filter_1500x.jpg?v=1636717220') no-repeat center center/cover;
        position: relative;
        animation: slideInLeft 1s ease forwards;
    }

    .image-section::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.3);
    }

    /* RIGHT SECTION */
    .login-section {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
        background: #f9f9f9;
        animation: slideInRight 1s ease forwards;
    }

    .login-box {
        width: 100%;
        max-width: 350px;
    }

    .login-box h2 {
        margin-bottom: 20px;
        font-size: 28px;
        color: #E70000;
        text-align: center;
        font-weight: bold;
        animation: fadeInDown 1s ease;
    }

    .error {
        background: #ffdddd;
        color: #E70000;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
        text-align: center;
        animation: shake 0.4s ease;
    }

    .login-box label {
        font-size: 14px;
        color: #333;
        margin-bottom: 5px;
        display: block;
    }

    .login-box input {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #E70000;
        border-radius: 8px;
        transition: 0.3s;
        font-size: 15px;
    }

    .login-box input:focus {
        border-color: #FF3B3B;
        box-shadow: 0 0 8px rgba(255,0,0,0.3);
        outline: none;
        transform: scale(1.02);
    }

    .password-wrapper {
        position: relative;
    }

    .password-wrapper input {
        padding-right: 40px;
    }

    .toggle-password {
        position: absolute;
        right: 12px;
        top: 40%;
        transform: translateY(-50%);
        cursor: pointer;
        font-size: 18px;
        color: #E70000;
    }

    .login-box button {
        width: 100%;
        padding: 12px;
        background: #E70000;
        border: none;
        border-radius: 8px;
        color: white;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .login-box button:hover {
        background: #FF3B3B;
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(255,0,0,0.3);
    }

    /* ANIMATIONS */
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
    @keyframes slideInLeft {
        from { transform: translateX(-100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideInRight {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        50% { transform: translateX(5px); }
        75% { transform: translateX(-5px); }
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .container {
            flex-direction: column;
            height: auto;
            width: 95%;
        }
        .image-section {
            height: 250px;
        }
    }

    @media (max-width: 768px) {
        .image-section { display: none; }
        .container { box-shadow: none; }
    }
</style>
</head>

<body>

<!-- Top Logo + Home Icon -->
<div class="top-logo">
    <!-- <a href="#">
        <img src="../assets/img/logo/logo_tamil.png" alt="Logo">
    </a> -->
    <a href="../index.php" class="home-icon">
        <i class="fa-solid fa-house"></i>
    </a>
</div>

<div class="container">
    <div class="image-section"></div>

    <div class="login-section">
        <div class="login-box">
            <center><img src="../assets/img/logo/logo_tamil.png" alt="" width="200"></center>

            <h2>Admin Login</h2>

            <?php if ($error) { ?>
                <p class="error"><?= $error ?></p>
            <?php } ?>

            <form method="POST">
                <label>Username</label>
                <input type="text" name="username" required>

                <label>Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" required>
                    <i class="fa fa-eye toggle-password" onclick="togglePassword()"></i>
                </div>

                <button type="submit" name="login">Login</button>
            </form>

        </div>
    </div>
</div>

<script>
function togglePassword() {
    const pass = document.getElementById("password");
    const icon = document.querySelector(".toggle-password");
    if (pass.type === "password") {
        pass.type = "text";
        icon.classList.replace("fa-eye", "fa-eye-slash");
    } else {
        pass.type = "password";
        icon.classList.replace("fa-eye-slash", "fa-eye");
    }
}
</script>

</body>
</html>
