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
                            <h1 class="display-3">ชุดหูฟังแบบใช้สาย</h1>
                            <p>ชุดหูฟังแบบใช้สายจะมาพร้อมกับวิธีการเชื่อมต่อหนึ่งในสองวิธี</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2 active ">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">ชุดหูฟังไร้สาย</h1>
                            <p>รชุดหูฟังไร้สายเชื่อมต่อผ่าน Bluetooth® หรือตัวรับสัญญาณ USB-A </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">การตัดเสียงรบกวนโดยใช้พลังงานไฟฟ้า</h1>
                            <p>การตัดเสียงรบกวนโดยใช้พลังงานไฟฟ้า (ANC) ลดเสียงสภาพแวดล้อมรอบตัวคุณ</p>
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
    <!-- gallary -->
    <section id="gallary" class="p-5">
        <div class="container">
            <h1 class="text-center">Headphone Shop</h1>
            <p class="text-center">ค้นหาชุดหูฟังที่เหมาะกับคุณ Headphone Shop มีชุดหูฟังสำหรับสำนักงานและบ้านที่หลากหลายสำหรับการใช้งานทุกประเภท ไม่ว่าจะเป็นการโทร การทำงานนอกสถานที่ การประชุมผ่านทางวิดีโอ หรือแม้กระทั่งการฟังเพลง ชุดหูฟังของเราทำงานได้หลายอย่าง ปิดกั้นเสียงรบกวน และช่วยให้คุณทำงานได้คราวละมากๆ แม้กระทั่งในสภาพแวดล้อมที่วุ่นวาย</p>
            <!-- Image -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/1649771/pexels-photo-1649771.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/846357/pexels-photo-846357.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/3394656/pexels-photo-3394656.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/377711/pexels-photo-377711.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/577769/pexels-photo-577769.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/5269699/pexels-photo-5269699.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/5269760/pexels-photo-5269760.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/219377/pexels-photo-219377.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/1082328/pexels-photo-1082328.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section id="gallary">
        <div class="container">
            <h1 class="text-center">Headphone Shop</h1>
            <p class="text-center">ค้นหาชุดหูฟังที่เหมาะกับคุณ Headphone Shop มีชุดหูฟังสำหรับสำนักงานและบ้านที่หลากหลายสำหรับการใช้งานทุกประเภท ไม่ว่าจะเป็นการโทร การทำงานนอกสถานที่ การประชุมผ่านทางวิดีโอ หรือแม้กระทั่งการฟังเพลง ชุดหูฟังของเราทำงานได้หลายอย่าง ปิดกั้นเสียงรบกวน และช่วยให้คุณทำงานได้คราวละมากๆ แม้กระทั่งในสภาพแวดล้อมที่วุ่นวาย</p>
            <!-- Image -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/1649771/pexels-photo-1649771.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/846357/pexels-photo-846357.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/3394656/pexels-photo-3394656.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/377711/pexels-photo-377711.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/577769/pexels-photo-577769.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/5269699/pexels-photo-5269699.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/5269760/pexels-photo-5269760.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/219377/pexels-photo-219377.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/1082328/pexels-photo-1082328.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <section class="footer">
        <p>Copyright &copy; 2023 บริษัท Headphone Shop จำกัด </p>
    </section>
</body>

</html>