
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
    <div class="set" style="left: 150px;">
    <form action="select0.php" method="post">
    <h2 style="margin-left: 0px;">ด้านครอบครัว</h2>
    <br>
    <input type="checkbox" name="parent01" ><label for="info">กำพร้า</label>
    <input type="checkbox" name="parent02" ><label for="info">ครอบครัวแตกแยก/พ่อแม่แยกทาง</label><br>
    <input type="checkbox" name="parent03" ><label for="info">ครอบครัวอุปถัมภ์</label>
    <input type="checkbox" name="parent04" ><label for="info">ได้รับการเลี้ยงดูไม่เหมาะสม</label><br>
    <input type="checkbox" name="parent05" ><label for="info">ได้รับผลกระทบจาการที่คนในครอบครัวต้องโทษจำคุก</label>
    <input type="checkbox" name="parent06" ><label for="info">ต้องดูแลบุลคลในครอบครัว</label><br>
    <input type="checkbox" name="parent07" ><label for="info">ต้องรับภาระหน้าที่ในครอบครัวเกินวัย/เกินความสามารถสติปัญญา</label>
    <input type="checkbox" name="parent08" ><label for="info">ตั้งครรภ์นอกสมรส</label><br>
    <input type="checkbox" name="parent09" ><label for="info">ตั้งครรภ์ในวัยรุ่นและไม่พร้อมในการเลี้ยงดูบุตร</label>
    <input type="checkbox" name="parent10" ><label for="info">ถูกทอดทิ้ง</label><br>
    <input type="checkbox" name="parent11" ><label for="info">อยู่ตามลำพังไม่มีผู้ดูแล และมีปัญหาในการดำรงชีวิต</label>
    <input type="checkbox" name="parent12" ><label for="info">ผู้ปกครองหรือผู้ดูแลมีพฤติกรรมไม่เหมาะสม</label><br>
    <input type="checkbox" name="parent13" ><label for="info">ผู้ปกครองหรือผู้ดูแลไม่สามารถอุปการะเลี้ยงดูได้</label>
    <input type="checkbox" name="parent14" ><label for="info">พ่อม่ายที่ต้องเลี้ยงดูบุตรตามลำพัง/พ่อเลี้ยงเดี่ยว</label><br>
    <input type="checkbox" name="parent15" ><label for="info">แม่ม่ายที่ต้องเลี้ยงดูบุตรตามลำพัง/แม่เลี้ยงเดี่ยว</label>
    <input type="checkbox" name="parent16" ><label for="info">ไม่มีผู้ดูแลในตอนกลางวัน ผู้ดูแลต้องออกไปทำงานนอกบ้าน</label><br>
    <input type="checkbox" name="parent17" ><label for="info">ไม่มีผู้ดูแลในตอนกลางคืน ต้องออกไปทำงานนอกบ้าน</label>
    <input type="checkbox" name="parent18" ><label for="info">ไม่สามารถเลี้ยงดูบุตรได้</label><br>
    <input type="checkbox" name="parent19" ><label for="info">ถูกกระทำด้วยความรุนแรงในครอบครัว ด้านร่างกาย</label>
    <input type="checkbox" name="parent20" ><label for="info">ถูกกระทำด้วยความรุนแรงในครอบครัว ด้านจิตใจ</label><br>
    <input type="checkbox" name="parent21" ><label for="info">ถูกกระทำด้วยความรุนแรงในครอบครัว ด้านเพศ</label>
    <input type="checkbox" name="parent22" ><label for="info">ครอบครัวมีหนี้สิน</label><br>
    <input type="checkbox" name="parent23" ><label for="info">ครอบครัวมีภาระเลี้ยงดูผู้ประสบปัญหา(อาทิ เด็ฏคนพิการ ผู้ติดเชื้อเอดส์ ผู้ติดยาเสพติด)</label><br>
    <input type="checkbox" name="parent24" ><label for="info">ผู้อุปการะมีฐานะยากจน/ขาดแคลน</label>
    <input type="checkbox" name="parent25" ><label for="info">ครอบครัวยากจน</label><br>

<br>
    <h2 style="margin-left: 0px;">ด้านความรุนแรงในครอบครัว/สังคม</h2>
    <br>
    <input type="checkbox" name="society01" ><label for="info">เป็นผู้กระทำความรุนแรงต่อผู้อื่น</label>
    <input type="checkbox" name="society02" ><label for="info">ทารุณร่างกาย</label><br>
    <input type="checkbox" name="society03" ><label for="info">ทารุณกรรมทางใจ</label>
    <input type="checkbox" name="society04" ><label for="info">ทารุณกรรมทางเพศ</label><br>
    <br>
    <h2 style="margin-left: 0px;">ด้านการเป็นผู้เสียหายจากการค้ามนุษย์</h2>
    <br>
    <input type="checkbox" name="human01" ><label for="info">ตกเป็นเครื่องมือแสวงหาผลประโยชน์อื่นๆ</label>
    <input type="checkbox" name="human02" ><label for="info">ถูกทารุณกรรม/กักขัง/หน่วงเหนี่ยว</label><br>
    <input type="checkbox" name="human03" ><label for="info">ถูกบังคับขอทาน</label>
    <input type="checkbox" name="human04" ><label for="info">ถูกบังคับค้าประเวณี</label><br>
    <input type="checkbox" name="human05" ><label for="info">ถูกล่อลวง</label>
    <input type="checkbox" name="human06" ><label for="info">ถูกแสวงหาประโยชน์ทางเพศ</label><br>
    <input type="checkbox" name="human07" ><label for="info">เป็นผู้กระทำความรุนแรงต่อผู้อื่น</label>
    <input type="checkbox" name="human08" ><label for="info">ถูกบังคับใช้แรงงาน</label><br>
    <input type="checkbox" name="human09" ><label for="info">ถูกบังคับให้ประพฤติผิดกฎหมาย</label><br>
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

    <br>
    <h2 style="margin-left: 0px;">ด้านการเข้าไม่ถึงสิทธิและความเป็นธรรมในสังคม</h2>
    <br>
    <input type="checkbox" name="right01" ><label for="info">ไม่มีค่าพาหนะเดินทางกลับภูมิลำเนา</label><br>
    <input type="checkbox" name="right02" ><label for="info">ไม่สามารถเข้าถึงบริการของรัฐ</label><br>
    <input type="checkbox" name="right03" ><label for="info">ยังไม่ยื่นคำขอมีบัตรประจำตัวคนพิการ</label><br>
    <input type="checkbox" name="right04" ><label for="info">ไม่มีถานะทางทะเบียนราษฎ์</label><br>
    <input type="checkbox" name="right05" ><label for="info">ขอบุตรบุญธรรม</label><br>
    <input type="checkbox" name="right06" ><label for="info">การเลือกปฏิบัติโดยไม่เป็นธรรมระหว่างเพศ</label><br>
    <input type="checkbox" name="right07" ><label for="info">ถูกละเมิดทางเพศ</label><br>
    <input type="checkbox" name="right08" ><label for="info">ได้รับผลกระทบจากเหตุการณ์ความรุนแรงทางการเมือง</label><br>
    <input type="checkbox" name="right09" ><label for="info">ได้รับผลกระทบจากเหตุการณ์ความไม่สงบชายแดนภาคใต้</label><br>
    <input type="checkbox" name="right10" ><label for="info">ได้รับผลกระทบจากภัยพิบัติภัยแล้ง/ภัยหนาว/วาตภัย/อุทกภัย/อัคคีภัย/แผ่นดิวไหว</label><br>
    <input type="checkbox" name="right11" ><label for="info">ได้รับผลกระทบจากมลภาวะ/สภาพแวดล้อม</label><br>

    <br>
    <h2 style="margin-left: 0px;">ด้านสภาพปัญหาสังคมอื่นๆ</h2>
    <br>
    <input type="checkbox" name="problem01" ><label for="info">ประพฤติคนไม่เหมาะสม</label><br>
    <input type="checkbox" name="problem02" ><label for="info">เสี่ยงต่อการกระทำผิด</label><br>
    <input type="checkbox" name="problem03" ><label for="info">ไม่ทราบวิธีการปฏิบัติตนหรือการปรับตัวที่เหมาะสม</label><br>
    <input type="checkbox" name="problem04" ><label for="info">การอพยพ/หลบหนีเข้าเมือง</label><br>
    <input type="checkbox" name="problem05" ><label for="info">อื่นๆ<input type="text" name="problem05"></label><br>

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