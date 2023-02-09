<?php include("db.php");?>
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
    <title>حجز رحلة</title>
  </head>
  <body>
    <div class="container">
      <div class="nav-container">
        <nav>
          <h3 class="logo">حافلة</h3>
          <ul>
            <li><a href="./P7.html">تعديل حجز</a></li>
            <li><a href="./P1.php">تسجيل الخروج</a></li>
          </ul>
        </nav>
      </div>
      <div class="hero">
        <div class="content">
          <h1>احجز <span> رحلتك</span> الان</h1>
          <h4>
          نقدم لك أفضل الخدمات للذهاب الى المسجد النبوي الشريف 
          </h4>
        </div>
      </div>
      <section id="qualities">
        <h2>حجز رحلة الذهاب</h2>
          <div class="header-container">
          <form action="post.php" method="POST">
            <h5>نقطة الانطلاق</h5>
          </div>
		  <select name="stationgo">
<option value="alyah">العالية</option>
<option value="sultanah">سلطانة</option>
<option value="alazizyah">العزيزية</option>
<option value="alqeblatin">القبلتين</option>
</select>
          <div class="header-container">
            <h5>الوقت والتاريخ</h5>
          </div>
		  <input type="date" name="datego"> 
		  <input type="time" name="timego">
          <div class="header-container">
            <h5>هل ترغب بحجز خدمة المساعد الشخصي ؟</h5>
          </div>
		  <input type="radio" id="YES" name="assistant_go" value="YES"> <label for="YES">نعم</label>
         <input type="radio" id="NO" name="assistant_no_go" value="NO"> <label for="NO">لا</label>
      </section>
	  <section id="qualities">
        <h2>حجز رحلة العودة</h2>
          <div class="header-container">
            <h5>نقطة الوصول</h5>
          </div>
		  <select name="stationback">
        <option value="alyah">العالية</option>
        <option value="sultanah">سلطانة</option>
        <option value="alazizyah">العزيزية</option>
        <option value="alqeblatin">القبلتين</option>
        </select>
          <div class="header-container">
            <h5>الوقت والتاريخ</h5>
          </div>
          <input type="date" name="dateback">
          <input type="time" name="timeback">
          <div class="header-container">
            <h5>هل ترغب بحجز خدمة المساعد الشخصي ؟</h5>
          </div>
		  <input type="radio" id="YES" name="assistant_back" value="YES"> <label for="YES">نعم</label>
         <input type="radio" id="NO" name="assistant_no_back" value="NO"> <label for="NO">لا</label>
		 <section id="qualities">
		<div class="header-container">
	     <h2> اختر طريقة الدفع </h2>
		 <input type="radio" id="CASH" name ="ASSISTANT" value="CASH"> <label for="CASH"> كاش في نقطة الانطلاق </label>
		 <input type="radio" id="APPLE" name ="ASSISTANT" value="APPLE"> <label for="APPLE"> Apple Pay </label>
		 <input type="radio" id="CARD" name ="ASSISTANT" value="CARD"> <label for="CARD"> شحن مسبق للبطاقة </label>
		  <input type="submit" name="booking" a href="./P6.html" class="btn">تأكيد الحجز</a>
      </section>
    </div>
</form>
  </body>
</html>