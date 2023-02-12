
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
    <h2 >ประเภทผู้ขอรับบริการ</h2> 
    <hr> 
   
    <div class="set" style="left: 150px;">
   
    <form action="select06.php" method="post" >
        <div class="box">
    <input type="checkbox" name="type01" ><label for="info">ครอบครัวของเด็ก/เด็กที่ประสบปัญหาความเดือดร้อน</label><br>
    <input type="checkbox" name="type02" ><label for="info">ผู้ตกทุกข์ได้ยากที่ขอให้ช่วยเหลือส่งกลับภูมิลำเนาเดิม</label><br>
    <input type="checkbox" name="type03" ><label for="info">ผู้ประสบปัญหาทางสังคมกรณีฉุกเฉิน</label><br>
    <input type="checkbox" name="type04" ><label for="info">ครอบครัวผู้มีรายได้น้อยที่ประสบความเดือดร้อนหรือผู้ไร้ที่พึ่ง</label><br>
    <input type="checkbox" name="type05" ><label for="info">ครอบครัวคนพิการที่มีบัตรประจำตัวคนพิการและประสบปัญหาความเดือดร้อน</label><br>
    <input type="checkbox" name="type06" ><label for="info">สตรีหรือครอบครัวที่ประสบปัญหาทางสังคม</label><br>
    <input type="checkbox" name="type07" ><label for="info">ผู้สูงอายุที่ประสบปัญหาความเดือดร้อนและมีความจำเป็นในเรื่องต่างๆ</label><br>
    <input type="checkbox" name="type08" ><label for="info">ผู้สูงอายุที่ถูกทารุณกรรม หรือถูกแสวงหาประโยชน์โดยมิชอบด้วยกฎหมาย หรือถูกทอดทิ้ง</label><br>
    <input type="checkbox" name="type09" ><label for="info">สตรีที่เป็นหัวหน้าครอบครัวที่ติดเชื้อหรือป่วยด้วยโรคเอดส์และมีผู้อยู่ในอุปการะ</label><br>
    <input type="checkbox" name="type10" ><label for="info">สตรีที่เป็นหัวหน้าครอบครัวที่ไม่ได้ติดเชื้อหรือป่วยด้วยโรคเอดส์แต่ต้องอุปการะคนในครอบครัวที่ติดเชื้อหรือป่วยด้วยโครเอดส์</label><br>
    <input type="checkbox" name="type11" ><label for="info">สตรีที่ติดเชื้อหรือป่วยด้วยโรคเอดส์ที่ไม่มีผู้อุปการะเลี้ยงดู</label><br>
    <input type="checkbox" name="type12" ><label for="info">สตรีที่มีสามีสามีป่วย หรือเสียชีวิตด้วยโรคเอดส์ แต่ต้องอุปการะเลี้ยงดูบุคคลในครอบครัว</label><br>
    <input type="checkbox" name="type13" ><label for="info">ครอบครัวที่เป็นหัวหน้าครอบครัวติดเชื้อหรือป่วยด้วยโรคเอดส์ และมีผู้อยู่ในอุปการะ</label><br>
    <input type="checkbox" name="type14" ><label for="info">ครอบครัวที่เป็นหัวหน้าครอบครัวไม่ได้ติดเชื้อหรือป่วยด้วยโรคเอดส์ แต่ต้องอุปการะสมาชิกในครอบครัวที่ติดเชื้อหรือป่วยด้วยโรคเอดส์</label><br>
    <input type="checkbox" name="type15" ><label for="info">ครอบครัวที่หัวหน้าครอบครัวถึงแก่กรรมด้วยโรคเอดส์</label><br>
    <input type="checkbox" name="type16" ><label for="info">ผู้ติดเชื้อหรือป่วยด้วยโรคเอดส์ที่ไม่มีผู้อุปการะเลี้ยงดู</label><br>
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