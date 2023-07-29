<?php
//เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

//รับค่าที่ส่งมาจากฟอร์ม
$fname= $_POST["fname"]; 
$lname= $_POST["lname"];
$gender= $_POST["gender"];
$emskills=implode(",",$_POST['skills']); 


//บันทึกข้อมูล
$sql = "INSERT INTO 
employees(fname,lname,gender,skills) 
VALUES('$fname','$lname','$gender','$emskills')";


//รันคำสั่ง SQL
$result = mysqli_query($connect, $sql);

//ตรวจสอบการทำงานของคำสั่ง Insert
if ($result) {
  header("location:showdataN.php");
}else {
  echo mysqli_error($connect);
} 
?>