<?php
include("connection.php");
include("view.php");


$name = $_SESSION['name'] ;
        $email = $_SESSION['email'] ;
        $issue = $_SESSION['issue'] ;
        $description = $_SESSION['description'] ;

$sql = "INSERT INTO `information`(`NAME`, `EMAIL`, `ISSUE`, `DESCRIPTION`) VALUES ('$name','$email','$issue','$description')";
if (!$conn->query($sql) === TRUE) {
  echo '<div class="alert alert-danger m-5" role="alert">
    Please enter the data again!
  </div>';
} else {
  echo '<div class="alert alert-success m-5" role="alert">
    Your record have been inserted.
  </div>';
}
