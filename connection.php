<?php
  // $servername = "localhost";
  // $username = "u750572988_panjarapole";
  // $password = "2chdsyOX|b";
  // $db="u750572988_panjarapole";

  // // Create connection
  // $conn = mysqli_connect($servername, $username, $password,$db);

  // // Check connection
  // if (!$conn) {
  //   die("Connection failed: " . mysqli_connect_error());
  // }

  $servername = "localhost";
  $username = "root";
  $password = "";
  $db="razorpaynew";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$db);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>