
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Bar Cafe</title>
   </head>
<body>
   
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style1.css">
  
  <title>เข้าระสู่ระบบจัดการข้อมูลพนักงาน</title>
  
</head>
 <!-- สร้างเมนู -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Headphone Shop</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar1" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="PRODUCT.php" class="nav-link">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a href="PRODUCT2.php" class="nav-link">สินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a href="PRODUCT3.php" class="nav-link">เกี่ยวกับเรา</a>
                    </li>
                    <li class="nav-item">
                        <a href="login1.php" class="nav-link">เข้าสู่ระบบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- การสร้าง Slider -->
<section id="slider">
        <div class="carousel slide" data-bs-ride="carousel" id="mySlider">
            <ol class="carousel-indicators">
                <button data-bs-target="#mySlider" data-bs-slide-to="0" class="active"></button>
                <button data-bs-target="#mySlider" data-bs-slide-to="1"></button>
                <button data-bs-target="#mySlider" data-bs-slide-to="2" ></button>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block active">
                            <h1 class="display-1">ยินดีต้อนรับเข้าสู่ระบบ admin</h1>
                    </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                        <h1 class="display-1">ยินดีต้อนรับเข้าสู่ระบบ admin</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block ">
                        <h1 class="display-1">ยินดีต้อนรับเข้าสู่ระบบ admin</h1>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#mySlider" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                 </button>
                <button class="carousel-control-next" data-bs-target="#mySlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
<section class="form-login">
  <div class="container">
    <h2> <i class='bx bxs-user-pin' style='color:#50e7d4'></i> เข้าระสู่ระบบจัดการข้อมูลพนักงาน</h2>
    <form method="POST" action="adminpage1.php">
      <div class="mb-3">
        <label for="username" class="form-label">ชื่อเข้าระบบ</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">รหัสผ่าน</label>
        <input type="password" class="form-control" id="password" name="password" required>
        <i class="fa-solid fa-eye" id="eye"></i>
      </div>
      <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button> 
      <button type="reset" class="btn btn-warning">ล้างข้อมูล</button> 
      <a href="index.php" class="btn btn-info">กลับหน้าหลัก</a>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
</section>


</html>
<?php

?>


</html>