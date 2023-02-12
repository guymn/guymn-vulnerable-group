
<html lang="th">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="test1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
function autoTab(obj) {
    var pattern = new String("____-_______"); // กำหนดรูปแบบในนี้
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
    <div class="tex">
    <div class="ractangle">
        <h2>ที่อยู่ปัจจุบัน <input type="checkbox" name="location" ><label for="gender">ที่อยู่ปัจจุบันเป็นที่อยู่เดียวกับที่อยู่ตามทะเบียนบ้าน</label></h2>  
    <button onclick="getLocation()" style="margin-left: 150px;">Find location</button>
    <hr>
    <div class="set" style="left: 150px;">
    
    <form action="select04.php" method="post">
    <input type="radio" name="house"value="myhome" ><label for="gender">บ้านตนเอง</label>
    <input type="radio" name="house"value="othome" ><label for="gender">อาศัยผู้อื่นอยู่</label>
    <input type="radio" name="house"value="yhome" ><label for="gender">อาศัยอยู่กับญาติ</label>
    <input type="radio" name="house"value="chome" ><label for="gender">บ้านเช่า</label>
    <input type="radio" name="house"value="nhome" ><label for="gender">อยู่กับผู้ว่าจ้าง</label>
    <input type="radio" name="house"value="homeless" ><label for="gender">ไม่มีที่อยู่เป็นหลักแหล่ง</label><br>
    <label for="na">พิกัด GPS : ละติจูด </label>
    <label for="html" id="demo" name="demo"><input type="text" name="demo"></label>
    <label for="sur">ลองติจูด </label>
    <label for="html" id="demo1" name="demo1"><input type="text" name="demo1"></label><br>  
    <label for="card">ชื่อสถานที่/ชื่ออาคาร/ชื่อหมู่บ้าน </label>
    <input type="text" name="homename">
    <label for="card">รหัสประจำบ้าน </label>
    <input type="text" tabindex="1" name="Rahushome" id="username" 
    size="25" value="" class="inputbox autowidth"  onkeyup="autoTab(this)"  minlength="11" maxlength="20" /><br>
    <label for="age">บ้านเลขที่</label>
    <input type="text" name="home01">
    <label for="age">หมู่ที่</label>
    <input type="text" name="moo01" style="width: 50px;">
    <label for="age">ชื่อหมู่บ้าน</label>
    <input type="text" name="hname01">
    <label for="age">ตรอก</label>
    <input type="text" name="troke01"><br>
    <label for="age">ซอย</label>
    <input type="text" name="soi01">
    <label for="age">ถนน</label>
    <input type="text" name="road01">
    <label for="age">ตำบล/แขวง</label>
    <input type="text" name="tumbon01"><br>
    <label for="age">อำเภอ</label>
    <input type="text" name="aumpor01">
    <label for="age">จังหวัด</label>
    <input type="text" name="jung01">
    <label for="age">รหัสไปรษณีย์</label>
    <input type="text" name="rahus01"><br>
    <label for="age">โทรศัพท์</label>
    <input type="text" name="tel01">
    <label for="age">โทรศัพท์มือถือ</label>
    <input type="text" name="phone01"><br>
    <label for="age">ติดต่อผ่านชื่อ</label>
    <input type="text" name="conname">
    <label for="age">โทรศัพท์</label>
    <input type="text" name="tel02">
    <label for="age">โทรศัพท์มือถือ</label>
    <input type="text" name="phone02"><br>
 
    <br>
    <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15107.416681430272!2d98.9550133!3d18.8046512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd393197b614f8352!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiK4Li14Lii4LiH4LmD4Lir4Lih4LmI!5e0!3m2!1sth!2sth!4v1667280074152!5m2!1sth!2sth"
            width="80%" height="350" style="border:0;position: relative; " allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
            <br>

 
            <input type="button" onclick="history.back()" value="ย้อนกลับ"> 
                      <input type="submit" value="Next">
        </form>
    </div>
</div>
    </div>
    </div>

   
        

        
    
    
           

    <script>
var x = document.getElementById("demo");
var y = document.getElementById("demo1");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
     y.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
    x.innerHTML=position.coords.latitude ;
    y.innerHTML=position.coords.longitude;
}
</script>       
</div>
</body>
</html>