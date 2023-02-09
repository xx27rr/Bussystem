<?php include("db.php");
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
    <title>الصفحة الرئيسية</title>
  </head>
  <body>
    <div class="container">
      <div class="nav-container">
        <nav>
          <h3 class="logo">حافلة</h3>
          <ul>
            <li><a href="./P8.html">ادارة حسابي</a></li>
            <li><a href="#qualities">تتبع رحلتك</a></li>
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
          <a href="./P5.php" class="btn">حجز جديد</a>
        </div>
      </div>
      
      <section id="qualities">
        <h2>تتبع الرحلات</h2>
        <div class="qualities-container">

        <div class="quality">
          <div class="header-container">
            
            <h3>رقم الحجز</h3>
          </div>
            <input type="text" name="TAKIT"/> 
        </div>
        <div class="quality">
          <div class="header-container">
           
            <h3>مسار الرحلة</h3>
          </div>
          <p>
           هنا يعرض المسار 
          </p>
        </div>
        <div class="quality">
          <div class="header-container">
            <i class="fas fa-money-bill-wave-alt"></i>
            <h3>معلومات الرحلة</h3>
          </div>
          <p>
            هنا يعرض المعلومات الوقت والتاريخ ونقطة الانطلاق 
          </p>
        </div>
      </section>
    </div>
  </body>
</html>