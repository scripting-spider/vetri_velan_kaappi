
<?php

// <!-- Local -->

// $host = "localhost";
// $user = "root";
// $pass = "";
// $db   = "vetri_velan_kaappi";

// $conn = mysqli_connect($host, $user, $pass, $db);

// if(!$conn){
//     die("Database Connection Failed: " . mysqli_connect_error());
// }


// <!-- Live -->

$host = "127.0.0.1:3306";
$user = "u507225362_vetrivelankapi";
$pass = "Vvk@2026";
$db   = "u507225362_vetrivelankapi";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>



