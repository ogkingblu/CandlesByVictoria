<?php

    $connection = mysqli_connect("students.cah.ucf.edu", "em108859", "ReySkywalker1020!", "em108859");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>


<?php 
//user sign up form
if (isset($_POST["signup"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO cbvlogin (userEmail, userPass) VALUES ('$email','$hashedpassword')";
    if(mysqli_query($connection, $sql)){
        $successMessage = "Data Received";
    }
    else{
        $successMessage = "Data send failure";
    }
}
 
?>


<?php
//user login form
if(isset($_POST["login"])){
    $useremailentry = $_POST["email"];
    $userpassentry = $_POST["password"];

    $user = "SELECT * FROM cbvlogin WHERE userEmail='$useremailentry'";

    $result = mysqli_query($connection, $user);
    $count = mysqli_num_rows($result);

    if($count == 1){

        $userpass = "SELECT userPass FROM cbvlogin WHERE userEmail = '$useremailentry'";
        $resulttwo = mysqli_query($connection, $userpass);
        $passrow = mysqli_fetch_array($resulttwo);
        $hashpass = $passrow['userPass'];

        if(password_verify($userpassentry, $hashpass)){
        $_SESSION["loggedin"] = "true";
        }
    }
    else{
        $loginsuccess = "Incorrect Username or Password!"; 
    }
}
?>



<?php
//close datbase connection
mysqli_close($connection);
?>
