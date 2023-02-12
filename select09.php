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
                    <div class="set" style="left: 150px;">
                        <h2 style="margin-left: 0px;">สิทธิสวัสดิการที่เคยมีอยู่</h2>

                        <form action="select06.php" method="post">


                            <div class="box">
                                <input type="checkbox" name="benefit01"><label for="info">เคย อะไรบ้างในปีงบประมาณ นี้ จำนวน<input type="text" name="number" style="width: 50px;">ครั้ง รวมเป็นเงิน
                                    <input type="text" name="bath">บาท ได้แก่(ตอบได้มากกว่า1ข้อ)</label><br>
                                <input type="checkbox" name="benefit02"><label for="info">เงินสงเคราะห์</label><br>
                                <input type="checkbox" name="benefit03"><label for="info">เงินทุนประกอบอาชีพ</label><br>
                                <input type="checkbox" name="benefit04"><label for="info">เบี้ยยังชีพผู้สูงอายุ</label><br>
                                <input type="checkbox" name="benefit05"><label for="info">เบี้ยความพิการ</label><br>
                                <input type="checkbox" name="benefit06"><label for="info">เงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด</label><br>
                                <input type="checkbox" name="benefit07"><label for="info">สวัสดิการที่ได้จากการลงทะเบียนโครงการเพื่อสวัสดิการแห่งรัฐ</label><br>
                                <input type="checkbox" name="benefit08"><label for="info">เงินซ่อมแซมบ้าน</label><br>
                                <input type="checkbox" name="benefit09"><label for="info">สวัสดิการอื่นนอกจากภาครัฐ ระบุ<input type="text" name="number"></label><br>
                                <input type="checkbox" name="benefit10"><label for="info">สวัสดิการเอกชน</label><br>
                                <input type="checkbox" name="benefit11"><label for="info">เงินกู้</label><br>
                                <input type="checkbox" name="benefit12"><label for="info">เครื่องช่วยความพิการ</label><br>
                                <input type="checkbox" name="benefit13"><label for="info">บัตรทอง(สูงอายุ/พิการ)</label><br>
                                <input type="checkbox" name="benefit14"><label for="info">บัตร อสม.</label><br>
                                <input type="checkbox" name="benefit15"><label for="info">ข้าราชการบำนาญ</label><br>
                                <input type="checkbox" name="benefit16"><label for="info">ประกันสังคม</label><br>
                                <input type="checkbox" name="benefit17"><label for="info">ประกันชีวิต</label><br>
                                <input type="checkbox" name="benefit18"><label for="info">อื่นๆ ระบุ<input type="text" name="benefit01"></label><br>
                                <br>
                                <h2 style="margin-left: 0px;">การรับรองข้อมูลส่วนบุคคล</h2><br>
                                <label for="info"><input type="checkbox" name="private">ข้าพเจ้าขอรับรองว่าข้อมูลข้างต้นถูกต้องตรงตามความเป็นจริงทุกประการ หากข้อมูลข้างต้นไม่ถูกต้องตรงความเป็นจริง<br>
                                    ข้าพเจ้าตกลงยินยอมให้ระงับสวัสดิการและประโยชน์อื่นๆ และยินยอมให้เปิดเผยข้อมูลข่าวสาร เพื่อประโยชน์ในการพัฒนา<br>
                                    คุณภาพชีวิตของข้าพเจ้าและครอบครัว</label><br>
                                <div class="header2" style="margin-left: 0px;">
                                    <div class="long" >
                                        <label for="info">ลงชื่อ<input type="text" name="cent01">ผู้ขอรับความช่วยเหลือ</label>
                                        <label for="info">( <input type="text" name="longname01"> )</label>
                                        <br><label for="bday">ลงวันที่</label>
                                        <input type="date" name="longdate01">
                                    </div>
                                    <div class="long">
                                        <label for="info" >ลงชื่อ<input type="text" name="cent02">เจ้าหน้าที่รับคำขอ</label>
                                        <label for="info">( <input type="text" name="longname02"> )</label>
                                        <br><label for="bday">ลงวันที่</label>
                                        <input type="date" name="longdate02">
                                    </div>
                                </div>






                                <br>
                                <br>
                                <br>


                                <input type="button" onclick="history.back()" value="ย้อนกลับ">
                                <input type="submit" value="Next">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>










        </script>
    </div>
</body>

</html>