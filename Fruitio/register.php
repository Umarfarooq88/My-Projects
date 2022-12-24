<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="register.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php
     session_start();
    //  session_register('email');
     $_SESSION['email']=$_POST['email'];
?>
<div class="container">
  <div class="title">Registration</div>
  <div class="content">
      <form action= "signin2.php" method = "POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details" >Full Name</span>
            <input type="text" placeholder="Enter your name" name = "name" required>
              </div>
<?php
 $ServerName = "localhost";
 $pass = "";
 $userName = "root";
 $database = "fruitio";
 $connection = mysqli_connect($ServerName,$userName,$pass,$database);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $email = $_POST['email'];
}
?>
          <div class="input-box">
            <span class="details">Email</span>
            <p>  <?php echo $email?> </p>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name = "phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name = "password1" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name = "password2" required>
          </div>

          <div class="input-box">
            <span class="details">Admin or user</span>
            <input type="dropdown" placeholder="Select your role" name = "role" required>
            <select>  
                <option value = "Admin"> Admin   
            </option>  
                <option value = "User"> User
            </option>   
          </select>  
          </div>
        </div>
        <div class="gender-details"  >
          <input type="radio" name="gender" id="dot-1"  >
          <input type="radio" name="gender" id="dot-2"  >
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Other</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" >
        </div>
      </form>
    </div>
  </div>


</body>
</html>