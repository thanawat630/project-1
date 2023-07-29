<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headphone Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>

<body>
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
                <button data-bs-target="#mySlider" data-bs-slide-to="0"></button>
                <button data-bs-target="#mySlider" data-bs-slide-to="1" class="active"></button>
                <button data-bs-target="#mySlider" data-bs-slide-to="2"></button>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">ยินดีต้อนรับเข้าสู่ระบบ</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2 active ">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">ยินดีต้อนรับเข้าสู่ระบบ</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">ยินดีต้อนรับเข้าสู่ระบบ</h1>
                            <p></p>
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
        <section id="service" class="py-5">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-center mb-4">
                    <i class="fas fa-user-tie fa-3x mb-4"></i>
                    <a href="insertFormN.php" class="btn btn-primary active">กรอกประวัติพนักงาน</a>
                    
                    <h3 class="text-center">ผู้ดูแลระบบ ทำการคลิกกรอกข้อมูลของพนักงาน แก้ไข และ ค้นหาข้อมูลพนักงานได้</h3>
                </div>
             
        </div>
    </section>
    </section>
   
    <!-- Footer -->
    <section class="footer">
        <p>Copyright &copy; 2023 บริษัท Headphone Shop จำกัด </p>
    </section>
</body>

</html>