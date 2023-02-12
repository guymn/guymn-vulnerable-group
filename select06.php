
<html lang="th">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="test1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>กรอกข้อมูล</title>

</head>
<body>
<div class="body"> 
    <div class="header">
        <div class="header2">
            <div class="logo">
                <img  class="left" src="img/Logo.png">
            </div>
            <div class="right" style="
            margin-right: 5%;
            margin-left: auto;
            padding-left: 0px;">
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
    <div class="tex"> 
    <div class="ractangle"> 
    <h2>สภาพปัญหาความเดือดร้อนที่พบ</h2> 
    <hr> 
    <div class="set" style="left: 150px;">
    <form action="select07.php" method="post"> 
    <h2 style="margin-left: 0px;">ด้านที่อยู่อาศัย</h2>
    <br>
    <input type="checkbox" name="home01" ><label for="info">ไม่มีกรรมสิทธิ์ในที่อยู่อาศัย</label>
    <input type="checkbox" name="home02" ><label for="info">สภาพที่อยู่อาศัยไม่เหมาะสมต่อการพักอาศัย</label><br>
    <input type="checkbox" name="home03" ><label for="info">ไม่มีที่อยู่อาศัย</label>
    <input type="checkbox" name="home04" ><label for="info">เร่ร่อน</label><br>
<br>
    <h2 style="margin-left: 0px;">ด้านสุขอนามัย</h2>
    <br>
    <input type="checkbox" name="health01" ><label for="info">ติดเชื้อเอดส์(HIV)/ป่วยด้วยโรคเอดส์</label>
    <input type="checkbox" name="health02" ><label for="info">หลงลืมชราภาพ</label>
    <input type="checkbox" name="health03" ><label for="info">ได้รับผลกระทบจากเชื้อเอดส์/ป่วยด้วยโรคเอดส์</label><br>
    <input type="checkbox" name="health04" ><label for="info">ป่วยเป็นโรคร้ายแรง</label>
    <input type="checkbox" name="health05" ><label for="info">เจ็บป่วยเรื้อรัง</label>
    <input type="checkbox" name="health06" ><label for="info">ขาดแคลนกายอุปกรณ์/ไม่มีเครื่องช่วยความพิการ</label><br>
    <input type="checkbox" name="health07" ><label for="info">ไม่สามารถช่วยเหลือตัวเองได้ในชีวิตประจำวัน</label>
    <input type="checkbox" name="health08" ><label for="info">ไม่ได้รับการรักษาพยาบาลหรือการฟื้นฟูสมรรถภาพ</label>
    <input type="checkbox" name="health09" ><label for="info">ติดยาเสพติด</label><br>  
    <input type="checkbox" name="health10" ><label for="info">ผู้ป่วยทางจิต</label>
    <input type="checkbox" name="health11" ><label for="info">โรคซึมเศร้า</label>
    <input type="checkbox" name="health12" ><label for="info">อื่นๆ<input type="text" name="health12"></label><br>
   <label for="age">น้ำหนัก</label>
    <input type="text" name="weight"><br>
    <label for="age">รอบอก</label>
    <input type="text" name="chest"><br>
    <br>
    <h2 style="margin-left: 0px;">ด้านการศึกษา</h2>
    <br>
    <input type="checkbox" name="edu01" ><label for="info">ขาดโอกาสทางการศึกษา</label>
    <input type="checkbox" name="edu02" ><label for="info">ไม่มีทุนการศึกษา</label>
    <br>
    <h2 style="margin-left: 0px;">ด้านการมีงานทำ และมีรายได้</h2>
    <br>
    <input type="checkbox" name="work01" ><label for="info">ขอทาน</label>
    <input type="checkbox" name="work02" ><label for="info">ขาดทักษะในการประกอบอาชีพ</label>
    <input type="checkbox" name="work03" ><label for="info">รายได้ไม่พอจ่าย</label><br>
    <input type="checkbox" name="work04" ><label for="info">ถูกเลิกจ้าง/ว่างงงาน</label>
    <input type="checkbox" name="work05" ><label for="info">ถูกนายจ้างเอารัดเอาเปรียบ</label>
    <input type="checkbox" name="work06" ><label for="info">มีหนี้สิน</label><br>
    <input type="checkbox" name="work07" ><label for="info">ไม่มีการออม</label>
    <input type="checkbox" name="work08" ><label for="info">ไม่มีงานทำ</label>
    <input type="checkbox" name="work09" ><label for="info">ไม่มีทุนประกอบอาชีพ</label><br>
    <input type="checkbox" name="work10" ><label for="info">ไม่มีรายได้</label>
    <input type="checkbox" name="work11" ><label for="info">ไม่มีอาชีพ</label>
    <input type="checkbox" name="work12" ><label for="info">ยากจน/ไร้ที่พึ่ง</label><br>
    <input type="checkbox" name="work13" ><label for="info">ไม่มีที่ดินทำกิน</label>
    <input type="checkbox" name="work14" ><label for="info">รายได้ไม่แน่นอน</label>
    <input type="checkbox" name="work15" ><label for="info">อื่นๆ<input type="text" name="work15"></label>
<br>
            <input type="button" onclick="history.back()" value="ย้อนกลับ"> 
                      <input type="submit" value="Next">
        </form>
    </div>
</div>
    </div>
    </div>

   
        

        
    
    
           

 
</script>       
</div>
</body>
</html>