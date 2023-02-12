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
                    <img class="left" src="img/Logo.png">
                </div>
                <div class="right" style="
            margin-right: 5%;
            margin-left: auto;
            padding-left: 0px;">
                    <div class="dropdown">
                        <span><i class="glyphicon glyphicon-user"></i> <?php if (isset($_SESSION['fName']) &&  isset($_SESSION['lName'])) {
                                                                            echo $_SESSION['fName'] . "  " . $_SESSION['lName'];
                                                                        } ?></span></a>
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
                <h2>กรณีเด็ก</h2>
                    <hr>
                <div class="set" style="left: 150px;">
                    
                    <form action="select03.php" method="post">
                        <label for="cars">คำนำหน้าชื่อ:</label>
                        <select name="male" id="male" value="คำนำหน้า">
                            <option value="dc">ด.ช.</option>
                            <option value="dy">ด.ญ.</option>
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
                        <input type="text" tabindex="1"  name="reg_id_card" id="username" size="25" value="" class="inputbox autowidth" onkeyup="autoTab(this)" minlength="13" maxlength="20" />
                        <label for="card">กรณีไม่มีเนื่องจาก </label>
                        <input type="text" name="alert"><br>
                        <label for="bday">วัน/เดือน/ปีเกิด</label>
                        <input type="date" name="bday">
                        <label for="age">อายุ</label>
                        <input type="text" name="age">
                        <label for="gender">เพศ</label>
                        <input type="checkbox" name="male"><label for="gender">ชาย</label>
                        <input type="checkbox" name="female"><label for="gender">หญิง</label><br>
                        <label for="age">เชื้อชาติ</label>
                        <input type="text" name="chart">
                        <label for="age">สัญชาติ</label>
                        <input type="text" name="sunc">
                        <label for="age">ศาสนา</label>
                        <input type="text" name="reli">
                        <br>
                        <br>
                        <label for="Satana"><b>กรณีเด็ก กรอกข้อมูลเพิ่ม ดังนี้</b></label><br>
                        <label for="fa">บิดา ชื่อ</label>
                        <input type="text" name="father">
                        <label for="sfa">นามสกุล</label>
                        <input type="text" name="sfather">
                        <label for="bday">วัน/เดือน/ปีเกิด</label>
                        <input type="date" name="fbday">
                        <label for="age">อายุ</label>
                        <input type="text" name="fage" style="width: 80px;">
                        <br>
                        <label for="fa">มาดา ชื่อ</label>
                        <input type="text" name="mother">
                        <label for="sfa">นามสกุล</label>
                        <input type="text" name="smother">
                        <label for="bday">วัน/เดือน/ปีเกิด</label>
                        <input type="date" name="mbday">
                        <label for="age">อายุ</label>
                        <input type="text" name="mage" style="width: 80px;">
                        <br>
                        <label for="gender">ความสัมพันธ์ของผู้อุปการะเด็ก</label>
                        <input type="radio" name="parent" value="puu"><label for="gender">ปู่</label>
                        <input type="radio" name="parent" value="yaa"><label for="gender">ย่า</label>
                        <input type="radio" name="parent" value="ta"><label for="gender">ตา</label>
                        <input type="radio" name="parent" value="yay"><label for="gender">ยาย</label>
                        <input type="radio" name="parent" value="uncle"><label for="gender">ลุง</label>
                        <input type="radio" name="parent" value="pa"><label for="gender">ป้า</label>
                        <input type="radio" name="parent" value="na"><label for="gender">น้า</label>
                        <input type="radio" name="parent" value="aunt"><label for="gender">อา</label>
                        <input type="radio" name="parent" value="no"><label for="gender">ไม่มีความสัมพันธ์</label>
                        <input type="checkbox" name="other"><label for="gender">อื่นๆ</label> <input type="text" name="other">
                        <br>
                        <label for="gender">สาเหตุการอุปการะ</label><br>
                        <label for="gender">บิดา</label>
                        <input type="radio" name="fathers" value="ting"><label for="gender">ทอดทิ้ง</label>
                        <input type="radio" name="fathers" value="die"><label for="gender">เสียชีวิต</label>
                        <input type="radio" name="fathers" value="bangkwang"><label for="gender">ต้องโทษจำคุก</label>
                        <input type="radio" name="fathers" value="fothers"><label for="gender">อื่นๆ ระบุ</label><input type="text" name="fothers">
                        <br>
                        <label for="gender">มารดา</label>
                        <input type="radio" name="mothers" value="mting"><label for="gender">ทอดทิ้ง</label>
                        <input type="radio" name="mothers" value="mdie"><label for="gender">เสียชีวิต</label>
                        <input type="radio" name="mothers" value="mbangkwang"><label for="gender">ต้องโทษจำคุก</label>
                        <input type="radio" name="mothers" value="mothers"><label for="gender">อื่นๆ ระบุ</label><input type="text" name="mothers">
                        <br>



                        <input type="button" onclick="history.back()" value="ย้อนกลับ">
                        <input type="submit" value="Next">
                    </form>
                </div>
            </div>
        </div>
        </div>










    </div>
</body>

</html>