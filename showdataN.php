<?php
require('dbconnect.php');
$sql = "SELECT * FROM employees  ORDER BY fname ASC";
$result=mysqli_query($connect,$sql);

$count=mysqli_num_rows($result);
$order=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลพนักงาน</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-striped table-hover">
            <h1 class="text-center">แสดงข้อมูลพนักงานทั้งหมด</h1>
            <br>
        <thead>
            <tr>
                <th>ลำดับที่</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เพศ</th>
                <th>ทักษะความสามารถ</th>
                <th>ลบข้อมูล</th>
                <th>แก้ไข</th>
             </tr>
        </thead>
        
        <tbody>
        <?php while($row=mysqli_fetch_assoc($result)){?>
            <tr>
                
                <td><?php echo $order++ ;?></td>
                 <td><?php echo $row["fname"] ;?></td>
                <td><?php echo $row["lname"] ;?></td>
                <td><?php echo $row["gender"] ;?></td>
                <td><?php echo $row["skills"] ;?></td>
               <!--ปุ่มลบข้อมูล--> 
                <td>
                    <a href = "deleteQueryString.php?idemp=<?php echo $row["empid"];?>"
                    class ="btn btn-danger "onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a>
                </td>
                <!--ปุ่มแก้ไขข้อมูล-->
                <td>
                <a href = "editForm.php?id=<?php echo $row["empid"];?>"
                class="btn btn-warnig">แก้ไข</a>
            </td>  
            </tr>
            <?php }?>
        </tbody>   
  </table> 
      <a href="insertFormN.php" class="btn btn-primary">บันทึกข้อมูลพนักงาน</a>
      <a href="adminindex.php" class="btn btn-success">กลับหน้าแรก</a>
      <a href="login1.php" class="btn btn-info">ออกจากระบบ</a>
      </div>         
</body>
</html>