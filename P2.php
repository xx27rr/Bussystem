<?php 
include("db.php");
if(isset($_POST['login']) & !empty($_POST['login'])){
  $username =filter_var($_POST['username'],FILTER_SANITINZ_STRING);
  $password =filter_var($_POST['password'],FILTER_SANITINZ_STRING);
 $errors=[];
 if(empty($username)){
  $errors[]="ادخل الاسم";
 }
 if(empty($password)){
  $errors[]="ادخل كلمة المرور";
 }
 if(empty($errors)){
  echo "insert db";
 } else {
  var_dump($errors);
 }
  $sql = "SELECT * FROM `users_data` WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  if($count == 1){
    session_start();
   $_SESSION['username'] = $username;
   $_SESSION['password'] = $password;
   $_SESSION['login'] = $true;
   echo "<script> location.replace('P4.php') <script/>";
  }else{
 
   $fmsg = "<div class='fmsg fmg'>تم ضبط محاولة دخول فاشلة وغير مصرح بها </div>";
 
  }
 }
 if(isset($_SESSION['username'])){
  $smsg = "<div class='smsg'>دخول ناجح</div>";
  echo "
  <meta HTTP-EQUIV='REFRESH' content='0; url=.login/p4.php'/>";
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
    <title>تسجيل دخول </title>
  </head>
  <body>
    <div class="container">
      <div class="nav-container">
        <nav>
          <h3 class="logo">حافلة</h3>
          <ul>
            <li><a href="./P3.php">انشاء حساب جديد</a></li>
          </ul>
        </nav>
      </div>
      <div class="hero">
        <div class="content">
        <form class="form-signin" method="POST">
          <h1>تسجيل <span> الدخول</span></h1>
          <h4>
          اسم المستخدم  
          </h4>
		  <input type="text" name="username" required />
		  <h4> 
		  كلمة المرور 
		  </h4>
		  <input type="password" name="password" required />
          <button type="submit" name="login" a href="./P4.php" class="btn">تسجيل دخول</a>
        </div>
      </div>
</form>
    </div>
  </body>
</html>