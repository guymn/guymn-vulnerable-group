
<html lang="th">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="test1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
function autoTab(obj) {
    var pattern = new String("_____________"); // กำหนดรูปแบบในนี้
    var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
    var returnText = new String("");
    var obj_l = obj.value.length;
    var obj_l2 = obj_l - 1;
    for (i = 0; i < pattern.length; i++) {
        if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
            returnText += obj.value + pattern_ex;
            obj.value = returnText;
        }
    }
    if (obj_l >= pattern.length) {
        obj.value = obj.value.substr(0, pattern.length);
    }
}

</script>
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
        <div class="ractangle">
    <div class="tex">
    <div class="set" style="left: 150px;">
    <form action="select01.php" method="post">
    <label for="cars">คำนำหน้าชื่อ:</label>
    <select name="male" id="male" value="คำนำหน้า">
    <option value="mr">นาย</option>
    <option value="ms">นางสาว</option>
    <option value="mrs">นาง</option>
    <option value="other">อื่นๆ </option> 
    </select>
    <label for="na">ชื่อ </label>
    <input type="text" name="name">
    <label for="sur">นามสกุล </label>
    <input type="text" name="surname"><br>
    <label for="card">บัตรประชาชน </label>
    <input type="text" tabindex="1"name="reg_id_card" id="username" 
    size="25" value="" class="inputbox autowidth"  onkeyup="autoTab(this)"  minlength="13" maxlength="20" />
    <label for="card">กรณีไม่มีเนื่องจาก </label>
    <input type="text" name="alert"><br>
    <label for="bday">วัน/เดือน/ปีเกิด</label>
    <input type="date" name="bday">
    <label for="age">อายุ</label>
    <input type="text" name="age">
    <label for="gender">เพศ</label>
    <input type="radio" name="gender" value="MALE" ><label for="gender">ชาย</label>
    <input type="radio" name="gender" value="FEMALE"><label for="gender">หญิง</label><br>
    <label for="age">ความสัมพันธ์กับผู้ประสบปัญหา</label>
    <input type="text" name="relationship">
    <label for="age">ระดับการศึกษาสูงสุด</label>
    <input type="text" name="educate"><br>
    <label for="age">บ้านเลขที่</label>
    <input type="text" name="home">
    <label for="age">หมู่ที่</label>
    <input type="text" name="moo" style="width: 50px;">
    <label for="age">ชื่อหมู่บ้าน</label>
    <input type="text" name="hname">
    <label for="age">ตรอก</label>
    <input type="text" name="troke"><br>
    <label for="age">ซอย</label>
    <input type="text" name="soi">
    <label for="age">ถนน</label>
    <input type="text" name="road">
    <label for="age">ตำบล/แขวง</label>
    <input type="text" name="tumbon"><br>
    <label for="age">อำเภอ</label>
    <input type="text" name="aumpor">
    <label for="age">จังหวัด</label>
    <input type="text" name="jung">
    <label for="age">รหัสไปรษณีย์</label>
    <input type="text" name="rahus"><br>
    <label for="age">โทรศัพท์</label>
    <input type="text" name="tel">
    <label for="age">โทรสาร</label>
    <input type="text" name="fax">
    <label for="age">โทรศัพท์มือถือ</label>
    <input type="text" name="phone"><br>
    <label for="age">เลขบัญชีธนาคาร</label>
    <input type="text" name="bank">
    <label for="age">อาชีพ</label>
    <input type="text" name="archive">
    <label for="age">e-mail</label>
    <input type="text" name="mail"><br>
    <label for="cars">ประเภทของผู้ประสบภัย:</label>
    <select name="male" id="male" value="คำนำหน้า">
    <option value="taur">ทั่วไป</option>
    <option value="child">เด็ก</option>
    </select>
    <br>
    <br>
            <input type="submit" value="Next">

        </form>
    </div>
</div>
        </div>
    </div>

   
        

        
    
    
           

         
</div>
</body>
</html>