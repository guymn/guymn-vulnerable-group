
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
        <a href="about.php" style=" padding-top: 25px;">เกี่ยวกับเรา</a>
        <a href="contract.php" style=" padding-top: 25px;" >ติดต่อเรา</a>
    </div>
</div>


<div class="tex">
    <div class="set" style="max-height: 480px; max-width: 450px;margin:10px;">
        <h3>ติดต่อเราได้ที่</h3>
        <p>239 ถ. ห้วยแก้ว ตำบลสุเทพ อำเภอเมืองเชียงใหม่ เชียงใหม่ 50200</p>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15107.416681430272!2d98.9550133!3d18.8046512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd393197b614f8352!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiK4Li14Lii4LiH4LmD4Lir4Lih4LmI!5e0!3m2!1sth!2sth!4v1667280074152!5m2!1sth!2sth"
            width="100%" height="480" style="border:0;position: relative; " allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="tex">
    <div class="set" style="margin-top: 90px;left: 150px;">
        <from action="" method="post">
            <label>ชื่อผู้ติดต่อ</label><br>
            <input type="text" name="name"><br>
            <label>อีเมลล์</label><br>
            <input type="text" name="email"><br>
            <label>เรื่อง</label><br>
            <input type="text" name="story"><br>
            <label>ข้อความ</label><br>
            <textarea name="texts" rows="10" style="height: 220px;width: 300px;"></textarea>
            <br><br>
            <input type="submit" value="confirm">
        </from>
    </div>
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