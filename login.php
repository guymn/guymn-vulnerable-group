<?php
session_start();
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>-->
    <link rel="stylesheet" href="log.css"> <!--link to css-->
    <style>
        p {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="body">
    <form class="right" action="loginAdmin.php">
        <input id="smallBotton" type="submit" value="สำหรับเจ้าหน้าที่">
    </form>
    <h1>เข้าสู่ระบบ</h1>
    <form action="checklogin.php" method="post">
        <div class="row">
            <div  class="colL">
                <h2>เลขบัตรประชาชน</h2>
            </div>
            <div class="colR">
                <input type="text" name="cardNumber" value=""/>
            </div>
        </div>
        <div class="row">
            <div class="colL">
                <h2>รหัสผ่าน</h2>
            </div>
            <div class="colR">
                <input type="text" name="pass" value=""/>
            </div>
        </div>
        <p class="forget">หากลืมรหัสผ่านให้กด <a href="forget.php">ลืมรหัสผ่าน</a></p>
        <?php
        if (isset($_SESSION['warning'])) //หากมีค่าในตัวแปร warning คือรหัสไม่ถูก
        {
            echo "<p align='center'><font color='FF0000'><B>".$_SESSION['warning']."</B></font></p>";
            unset($_SESSION['warning']); //ล้างค่าใน warning
            
        }
        ?>
        <input id="bigBotton" type="submit" value="เข้าสู่ระบบ" />
        <p class="create"><a href="create.php">สร้างบัญชี</a></p>
    </form>
    </div>
</body>
</html>
