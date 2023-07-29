<?php
session_start();
error_reporting(~E_NOTICE);
$username = $_post['username'];
$password = $_post['password'];

if (($username !='root') || ($password !='1234'))
{
    echo "<script>";
    echo "alert(\"ชื่อเข้าระบบหรือรหัสผ่านไม่ถูกต้อง\");";
    echo "window.history.bacl()";
    echo "</script>";
}
else
{
    $_SESSION["ses_userid"] = session_id();
    $_session["ses_username"] = $username;
    header("location:adminindex.php");
}
?>