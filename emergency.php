
<html lang="th">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="M.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>
<div class="body"> 
    <div class="header">
        <div class="header2">
            <div class="logo">
                <img  class="left" src="img/Logo.png">
            </div>
           
            <div class="right">
                <a href="home.php">หน้าหลัก</a>
            </div>

            <div class="right">
                <a href="dsfdsfds.com">ข่าวสาร<br></a>
                
            </div>

            <div class="right">
                <a href="contract.php">ติดต่อเจ้าหน้าที่<br></a>
                
            </div>
            <div class="right" style="margin-right: 120px;">
                <a href="emergency.php">ขอความช่วยเหลือ<br></a>
            </div>
            <div class="right" style="
            margin-right: 5%;
            margin-left: auto;
            padding-left: 0px;
            ">
                <div class="dropdown">
                    <span><i class="glyphicon glyphicon-user"></i> <?php if(isset($_SESSION['fName']) &&  isset($_SESSION['lName'])){echo $_SESSION['fName']."  ".$_SESSION['lName'];} ?></span></a>
                    <div class="dropdown-content">
                        <a href="home.html">ข้อมูลส่วนตัว</p></a>
                        <a href="login.php">ลงชื่อออก</p></a>
                    </div>
                  </div>
            </div>
        </div>
    </div>


    <div class="main-content">
    <div class="header2">

    <div class="rec">
                
                <div class="rect">
                    <a href="emergency.php" style=" padding-top: 25px;" >ขอความช่วยเหลือ</a>
                    <a href="history.php"  style=" padding-top: 25px;" >ประวัติขอความช่วยเหลือ</a>
                   
                </div>
            
        </div>
        <div class="tex">
            <form action="gogo.php" method="post" style="
            margin-left: 20px;
            margin-top: 20px;
        ">
                <label for="fname">ที่อยู่ตอนนี้:</label><br>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120866.805451573!2d98.95647724999999!3d18.7942459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3a7e90bb6f5d%3A0x98d46270a59b4367!2z4LmA4LiX4Lio4Lia4Liy4Lil4LiZ4LiE4Lij4LmA4LiK4Li14Lii4LiH4LmD4Lir4Lih4LmIIOC4reC4s-C5gOC4oOC4reC5gOC4oeC4t-C4reC4h-C5gOC4iuC4teC4ouC4h-C5g-C4q-C4oeC5iCDguYDguIrguLXguKLguIfguYPguKvguKHguYg!5e0!3m2!1sth!2sth!4v1667042348087!5m2!1sth!2sth"
                    width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br>
                <br>
                <input type="checkbox" style="
            width: 29px;
            height: 29px;
        ">
                <label for="vehicle3">ที่อยู่ตามโปรไฟล์</label>
                <br>
                <br>
                <br><input type="submit" value="Submit">
            </form>
        </div>






</div>
    </div>

    <div class="container">
  <div class="center"> 
    <div class="footer">
      <div class="no">
            <p style="margin-left: 40px;margin-top: 26px;">มหาวิทยาลัยเชียงใหม่
                239 ถนนห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50200</p>
                <p><i class="fa-solid fa-phone"></i>
                +66 5394 1000, +66 5394 1300</p>
                <i class="fa-solid fa-envelope"></i>
                <a href="mail_outline.svg">Email: ccarc@cmu.ac.th</a>
            </div>

            <div class="no">
            
            <i class="fa-brands fa-facebook"></i>
            <a href  ="https://www.facebook.com/cmuofficial/" target="_blank">FB:มหาวิทยาลัยเชียงใหม่</a>
            </div>
       </div>
        </div>
        </div>

            
</div>
</body>
</html>