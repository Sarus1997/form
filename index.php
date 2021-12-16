<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

  <title>Form data</title>

  <style>

    body {
      background-color: #F6F6F6;
      font-family: Arial, Helvetica, sans-serif;

    }

    .input[type=text],
    .select,
    .textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    .input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: 2px;
      border-radius: 4px;
      cursor: pointer;
    }

    .input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #ECECEC;
      padding: 50px;
    }

    .thumbnail01 {
      padding: 22px 70px;
      color: rgb(53, 52, 52);
      color: rgb(39, 39, 39);
      border: 3px;

    }

    .form {
      display: block;
      margin-top: 0em;
    }


  </style>

</head>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

  <title>Form Data </title>

</head>

<body>

  <div class="container">
    <form action="">
      <div class="thumbnail01">
        <div class="form-group">
          
          <center>
            <hr>
            <h1 ">ข้อมูลส่วนตัว</h1>
                    <br>
                    <hr>
                  </center>

                  <div class=" form-group">
              <label for="">เลขบัตรประชาชน*</label>
              <input type="text" required class="form-control" id="IDcardnumber" value="เลขบัตรประชาชน">
        </div>
        <br>

        <div class="form-group">
          <label for="sel1">เพศ</label>
          <select class="form-control" id="sex" pattern="เพศ">
            <option value="null">ไม่ระบุ</option>
            <option value="man">ชาย</option>
            <option value="female">หญิง</option>
          </select>
        </div>
        <br>

        <div class="form-row">
          <label for="text">ชื่อ*</label>
          <input type="text" required class="form-control" id="fname" value="ชื่อ">
        </div>
        <br>

        <div class="form-row">
          <label for="text">นามสกุล*</label>
          <input type="text" required class="form-control" id="lname" value="นามสกุล">
          </div>
          <br>

          <div class="form-row">
            <label for="branch">สาขา*</label>
            <select class="form-control" id="branch">
              <option value="null">...</option>
              <option value="MTA">เทคโนโลยีมัลติมีเดีย แอนิเมชั่น และเกม</option>
              <option value="ITD">เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล</option>
              <option value="DCM">ดิจิทัลคอนเทนต์และสื่อ</option>
              <option value="IMI">นวัตกรรมสารสนเทศทางการแพทย์</option>
              <option value="DCA">นิเทศศาสตร์ดิจิทัล</option>
            </select>
          </div>
          <br>

          <div class="form-row">
            <label for="sel1">ศาสนา</label>
            <select class="form-control" id="religion">
              <option value="null">...</option>
              <option value="Buddhist">พุทธ</option>
              <option value="Christianity">คริสตร์</option>
              <option value="islam">อิสลาม</option>
            </select>
          </div>
          <br>

          <div class="form-row">
            <label for="text">บ้านเลขที่*</label>
            <input type="text" required class="form-control" id="address" value="บ้านเลขที่">
          </div>
          <br>

          <div class="form-row">
            <label for="text">หมู่ที่*</label>
            <input type="text" required class="form-control" id="village" value="หมู่ที่">
          </div>
          <br>

          <div class="form-row">
            <label for="text">ถนน*</label>
            <input type="text" required class="form-control" id="road" value="ถนน">
          </div>
          <br>

          <div class="form-row">
            <label for="text">ตำบล/แขวง*</label>
            <input type="text" required class="form-control" id="tambol" value="ตำบล/แขวง">
          </div>
          <br>

          <div class="form-row">
            <label for="text">อำเภอ/เขต*</label>
            <input type="text" required class="form-control" id="koun" value="อำเภอ/เขต">
          </div>
          <br>

          <div class="form-row">
            <label for="sel1">จังหวัด*</label>
            <select class="form-control" required id="province">
              <option value="null">...</option>
              <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
              <option value="กระบี่">กระบี่ </option>
              <option value="กาญจนบุรี">กาญจนบุรี </option>
              <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
              <option value="กำแพงเพชร">กำแพงเพชร </option>
              <option value="ขอนแก่น">ขอนแก่น</option>
              <option value="จันทบุรี">จันทบุรี</option>
              <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
              <option value="ชัยนาท">ชัยนาท </option>
              <option value="ชัยภูมิ">ชัยภูมิ </option>
              <option value="ชุมพร">ชุมพร </option>
              <option value="ชลบุรี">ชลบุรี </option>
              <option value="เชียงใหม่">เชียงใหม่ </option>
              <option value="เชียงราย">เชียงราย </option>
              <option value="ตรัง">ตรัง </option>
              <option value="ตราด">ตราด </option>
              <option value="ตาก">ตาก </option>
              <option value="นครนายก">นครนายก </option>
              <option value="นครปฐม">นครปฐม </option>
              <option value="นครพนม">นครพนม </option>
              <option value="นครราชสีมา">นครราชสีมา </option>
              <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
              <option value="นครสวรรค์">นครสวรรค์ </option>
              <option value="นราธิวาส">นราธิวาส </option>
              <option value="น่าน">น่าน </option>
              <option value="นนทบุรี">นนทบุรี </option>
              <option value="บึงกาฬ">บึงกาฬ</option>
              <option value="บุรีรัมย์">บุรีรัมย์</option>
              <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
              <option value="ปทุมธานี">ปทุมธานี </option>
              <option value="ปราจีนบุรี">ปราจีนบุรี </option>
              <option value="ปัตตานี">ปัตตานี </option>
              <option value="พะเยา">พะเยา </option>
              <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
              <option value="พังงา">พังงา </option>
              <option value="พิจิตร">พิจิตร </option>
              <option value="พิษณุโลก">พิษณุโลก </option>
              <option value="เพชรบุรี">เพชรบุรี </option>
              <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
              <option value="แพร่">แพร่ </option>
              <option value="พัทลุง">พัทลุง </option>
              <option value="ภูเก็ต">ภูเก็ต </option>
              <option value="มหาสารคาม">มหาสารคาม </option>
              <option value="มุกดาหาร">มุกดาหาร </option>
              <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
              <option value="ยโสธร">ยโสธร </option>
              <option value="ยะลา">ยะลา </option>
              <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
              <option value="ระนอง">ระนอง </option>
              <option value="ระยอง">ระยอง </option>
              <option value="ราชบุรี">ราชบุรี</option>
              <option value="ลพบุรี">ลพบุรี </option>
              <option value="ลำปาง">ลำปาง </option>
              <option value="ลำพูน">ลำพูน </option>
              <option value="เลย">เลย </option>
              <option value="ศรีสะเกษ">ศรีสะเกษ</option>
              <option value="สกลนคร">สกลนคร</option>
              <option value="สงขลา">สงขลา </option>
              <option value="สมุทรสาคร">สมุทรสาคร </option>
              <option value="สมุทรปราการ">สมุทรปราการ </option>
              <option value="สมุทรสงคราม">สมุทรสงคราม </option>
              <option value="สระแก้ว">สระแก้ว </option>
              <option value="สระบุรี">สระบุรี </option>
              <option value="สิงห์บุรี">สิงห์บุรี </option>
              <option value="สุโขทัย">สุโขทัย </option>
              <option value="สุพรรณบุรี">สุพรรณบุรี </option>
              <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
              <option value="สุรินทร์">สุรินทร์ </option>
              <option value="สตูล">สตูล </option>
              <option value="หนองคาย">หนองคาย </option>
              <option value="หนองบัวลำภู">หนองบัวลำภู </option>
              <option value="อำนาจเจริญ">อำนาจเจริญ </option>
              <option value="อุดรธานี">อุดรธานี </option>
              <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
              <option value="อุทัยธานี">อุทัยธานี </option>
              <option value="อุบลราชธานี">อุบลราชธานี</option>
              <option value="อ่างทอง">อ่างทอง </option>
            </select>
          </div>
          <br>

          <div class="form-row">
            <label for="text">รหัสไปรษณีย์*</label>
            <input type="text" required class="form-control" id="zip" value="รหัสไปรษณีย์">
          </div>
          <br>

          <div class="form-row">
            <label for="text">เบอร์โทรศัพท์บ้าน*</label>
            <input type="text" class="form-control" id="Phone" value="เบอร์โทรศัพท์บ้าน">
          </div>
          <br>

          <div class="form-row">
            <label for="text">โทรศัพท์มือถือ*</label>
            <input type="text" required class="form-control" id="phone2" value="โทรศัพท์มือถือ">
          </div>
          <hr>

          <div class="d-grid gap-2">
            <button id="btnsand" class="btn btn-primary" type="button"
              style="margin-top: 20px; margin-bottom: 20px; background-color: #ebbdbd; "button"
              onclick="document.getElementById('demo').innerHTML = Date()"">Submit</button>
          </div>
          <br.

          <p id="demo"></p>

    </form>
  </div>

  </div>

</body>

<script>
  $(() => {

    $("#btnsand").click(() => {
      var CID = $("#cid").val();
      var Fname = $("#fname").val();
      var Lname = $("#lname").val();
      var SEX = $("#sex").val();
      var Branch = $("#branch").val();
      var Religion = $("#religion").val();
      var Address = $("#address").val();
      var Village = $("#village").val();
      var Road = $("#road").val();
      var Tambol = $("#tambol").val();
      var Koun= $("#koun").val();
      var Province = $("#province").val();
      var Zip = $("#zip").val();
      var Phone = $("#phone").val();
      var Phone2 = $("#phone2").val();
      showdetail(CID, SEX, Fname, Lname, Religion, Address, Village, Road, Tambol, Koun, Province, Zip, Phone, Phone2, Branch);
    })
  })

  function showdetail(CID, SEX, Fname, Lname, Religion, Address, Village, Road, Tambol, Koun, Province, Zip, Phone, Phone2, Branch) {

    var data = "{";
    data += '"เลขบัตรประชาชน":"' + $("#CID").val() + '",';
    data += '"ชื่อ":"' + $("#fname").val() + '",';
    data += '"นามสกุล":"' + $("#lname").val() + '",';
    data += '"เพศ":"' + $("#sex").val() + '",';
    data += '"สาขา":"' + $("#branch").val() + '",';
    data += '"ศาสนา":"' + $("#religion").val() + '",';
    data += '"บ้านเลขที่":"' + $("#address").val() + '",';
    data += '"หมู่ที่":"' + $("#village").val() + '",';
    data += '"ถนน":"' + $("#road").val() + '",';
    data += '"ตำบล/แขวง":"' + $("#tambol").val() + '",';
    data += '"อำเภอ/เขต":"' + $("#koun").val() + '",';
    data += '"จังหวัด":"' + $("#province").val() + '",';
    data += '"รหัสไปรษณีย์":"' + $("#zip").val() + '",';
    data += '"เบอร์โทรศัพท์บ้าน":"' + $("#phone").val() + '",';
    data += '"โทรศัพท์มือถือ":"' + $("#Phone2").val() + '"';
    data += "}";
    console.log(JSON.parse(data));
  }
</script>

</html>
