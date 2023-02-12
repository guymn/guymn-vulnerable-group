
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
    <h2 style="margin-left: 0px;">สภาพที่อยู่อาศัย</h2>   
    <form action="select05.php" method="post">
    <input type="checkbox" name="myhomes" ><label for="info">มีที่อยู่อาศัยเป็นของตนเองและมั่นคงถาวร</label>
    <input type="checkbox" name="othomen" ><label for="info">มีที่อยู่อาศัยเป็นของตนเองแต่ไม่มั่นคงถาวร</label>
    <input type="checkbox" name="yathome" ><label for="info">อาศัยอยู่กับผู้อื่น</label><br>
    <input type="checkbox" name="otherhome" ><label for="info">อยู่ในที่ดินบุคคลอื่น</label>
    <input type="checkbox" name="Chaohome" ><label for="info">บ้านเช่า</label>
    <input type="checkbox" name="public" ><label for="info">พื้นที่สาธารณะ</label><br>
    <br>
    <h2 style="margin-left: 0px;">อาชีพ</h2> 
    <input type="checkbox" name="no archive" ><label for="info">ไม่มีอาชีพ/ว่างงาน</label>
    <input type="checkbox" name="student" ><label for="info">นักเรียน/นักศึกษา</label>
    <input type="checkbox" name="midddle" ><label for="info">ค้าขาย/ธุรกิจส่วนตัว</label>
    <input type="checkbox" name="monk" ><label for="info">ภิกษุ/สามาเณร/แม่ชี</label><br>
    <input type="checkbox" name="agri" ><label for="info">เกษตรกร(ทำไร่/นา/สวน/เลี้ยงสัตว์/ประมง)</label>
    <input type="checkbox" name="rubjang" ><label for="info">รับจ้าง</label>
    <input type="checkbox" name="ratt" ><label for="info">ข้าราชการ/พนักงานของรัฐ</label><br>
    <input type="checkbox" name="ratwisa" ><label for="info">พนักงานรัฐวิสาหกิจ</label>
    <input type="checkbox" name="coperation" ><label for="info">พนักงานบริษัท</label>
    <input type="checkbox" name="otherss" ><label for="info">อื่นๆ ระบุ <input type="text" name="otherss"> </label>
<br>
<label for="info">รายได้เฉลี่ยต่อเดือน</label><input type="text" name="salary"><label for="info">บาท</label>
<label for="info">ที่มาของรายได้</label>
<input type="checkbox" name="myself" ><label for="info">ด้วยตัวเอง</label>
<input type="checkbox" name="yourself" ><label for="info">ผู้อื่นให้</label><br>
<label for="info">หนี้สินในระบบ</label><input type="text" name="intax"><label for="info">บาท</label>
<label for="info">หนี้สินนอกระบบ</label><input type="text" name="outtax"><label for="info">บาท</label><br>
<label for="info">รายได้เฉลี่ยของครอบครัว</label><input type="text" name="homesalary"> <label for="info">บาทต่อเดือน</label>
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