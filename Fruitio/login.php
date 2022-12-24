<?php
session_start();
include "db_conn.php";

if ((isset($_POST['email'])) && (isset($_POST['password']))){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
}

$emailid = validate($_POST['email']);
$mainpassword = validate($_POST['password']);

if(empty($emailid)){
    header("Location: signin2.php?erro=User Email is required");
    exit();
}elseif(empty($mainpasswords)){
    header("Location: signin2.php?erro=User Password is required");
    exit();
}
$sql = "SELECT * from details where email = '$emailid' AND password = '$mainpassword'";
$con1 = mysqli_query($connection, $sql);
if(mysqli_num_rows($con1) === 1){
    $row = mysqli_fetch_assoc($con1);
    if ($row['email'] === $emailid && $row['password'] === $mainpassword){
        echo ("Logged in");
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        header("Location:option.php");
        exit();
    }else{
        header("Location:signin2.php?erro=Incorrect email or password!!!");
    }
}
else{
    header("Location:signin2.php");
    exit();
}