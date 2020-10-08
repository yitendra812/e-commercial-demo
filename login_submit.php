<?php

require("includes/common.php");

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$PASSWORD = $_POST['PASSWORD'];
$PASSWORD = mysqli_real_escape_string($con, $PASSWORD);


// Query checks if the EMAIL and PASSWORD are present in the database.
$query = "SELECT id, email FROM users WHERE email='" . $email . "' AND PASSWORD='" . $PASSWORD . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the EMAIL and PASSWORD are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = $$_GET['error'];
  $error = "<span class='red'>Enter Correct E-mail and PASSWORD Combination</span>";
  header('location: login.php?error=' . $error);
} else {
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');
}
?>
