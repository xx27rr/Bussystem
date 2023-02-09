<?php 
session_start();
include("db.php");
if(isset($_POST['submit']) && !empty($_POST['submit'])){
  $username =filter_var($_POST['username'],FILTER_SANITIZE_STRING);
  $Password =filter_var($_POST['Password'],FILTER_SANITIZE_STRING);
  $Email_adress =filter_var($_POST['Email_adress'],FILTER_SANITIZE_EMAIL);
  $Fname =filter_var($_POST['Fname'],FILTER_SANITIZE_STRING);
  $Lname =filter_var($_POST['Lname'],FILTER_SANITIZE_STRING);
  $Phone_number =($_POST['Phone_number']);
 $sql = "INSERT INTO 'users_data' (Fname , Lname , Phone_number , Email_adress , username , Password) VALUES ('$Fname','$Lname','$Phone_number','$Email_adress','$username','$Password')";
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="حافلة" />
    <meta property="og:description" content="نرافقك من والى المسجد النبوي الشريف" />
    <meta property="og:image" content="https://i.ibb.co/tMDGsYd/og.jpg"/>

    <link rel="stylesheet" href="STYLEP.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>انشاء حساب</title>
  </head>
  <body>
    <div class="container">
      <div class="nav-container">
        <nav>
          <h3 class="logo">حافلة</h3>
          <ul>
            <li><a href="./P15.php">تسجيل الدخول</a></li>
          </ul>
        </nav>
      </div>
      <form  action="p4.php" method="POST">
      <div class="hero">
        <div class="content">
          <h1>انشاء <span> حساب</span> </h1>
          <h6>
          الاسم الاول 
          </h6>
		  <input type="text" name="Fname" class="form-control">
		  <h6>
           الاسم الثاني 
          </h6>
		  <input type="text" name="Lname" class="form-control"> 
		  <h6>
           رقم الجوال  
          </h6>
		  <input type="tel" id="phone" name="Phone_number" class="form-control">
		  <h6>
           الايميل 
          </h6>
		  <input type="email" name="Email_adress" class="form-control"> 
          <h6>
          اسم المستخدم 
          </h6>
		  <input type="text" name="username" class="form-control" >
		  <h6>
          كلمة المرور 
          </h6>
		  <input type="password" name="Password" class="form-control">
          <input type="submit" name="submit" value="انشاء حساب" class="btn" >
        </div>
      </div>
          </section>
          </form>
      </div>
    </div>
  </body>
</html>