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
            <h1 ">???????????????????????????????????????</h1>
                    <br>
                    <hr>
                  </center>

                  <div class=" form-group">
              <label for="">??????????????????????????????????????????*</label>
              <input type="text" required class="form-control" id="IDcardnumber" value="??????????????????????????????????????????">
        </div>
        <br>

        <div class="form-group">
          <label for="sel1">?????????</label>
          <select class="form-control" id="sex" pattern="?????????">
            <option value="null">?????????????????????</option>
            <option value="man">?????????</option>
            <option value="female">????????????</option>
          </select>
        </div>
        <br>

        <div class="form-row">
          <label for="text">????????????*</label>
          <input type="text" required class="form-control" id="fname" value="????????????">
        </div>
        <br>

        <div class="form-row">
          <label for="text">?????????????????????*</label>
          <input type="text" required class="form-control" id="lname" value="?????????????????????">
          </div>
          <br>

          <div class="form-row">
            <label for="branch">????????????*</label>
            <select class="form-control" id="branch">
              <option value="null">...</option>
              <option value="MTA">???????????????????????????????????????????????????????????? ?????????????????????????????? ??????????????????</option>
              <option value="ITD">?????????????????????????????????????????????????????????????????????????????????????????????????????????</option>
              <option value="DCM">??????????????????????????????????????????????????????????????????</option>
              <option value="IMI">?????????????????????????????????????????????????????????????????????????????????</option>
              <option value="DCA">??????????????????????????????????????????????????????</option>
            </select>
          </div>
          <br>

          <div class="form-row">
            <label for="sel1">???????????????</label>
            <select class="form-control" id="religion">
              <option value="null">...</option>
              <option value="Buddhist">????????????</option>
              <option value="Christianity">?????????????????????</option>
              <option value="islam">??????????????????</option>
            </select>
          </div>
          <br>

          <div class="form-row">
            <label for="text">??????????????????????????????*</label>
            <input type="text" required class="form-control" id="address" value="??????????????????????????????">
          </div>
          <br>

          <div class="form-row">
            <label for="text">?????????????????????*</label>
            <input type="text" required class="form-control" id="village" value="?????????????????????">
          </div>
          <br>

          <div class="form-row">
            <label for="text">?????????*</label>
            <input type="text" required class="form-control" id="road" value="?????????">
          </div>
          <br>

          <div class="form-row">
            <label for="text">????????????/????????????*</label>
            <input type="text" required class="form-control" id="tambol" value="????????????/????????????">
          </div>
          <br>

          <div class="form-row">
            <label for="text">???????????????/?????????*</label>
            <input type="text" required class="form-control" id="koun" value="???????????????/?????????">
          </div>
          <br>

          <div class="form-row">
            <label for="sel1">?????????????????????*</label>
            <select class="form-control" required id="province">
              <option value="null">...</option>
              <option value="???????????????????????????????????????">???????????????????????????????????????</option>
              <option value="??????????????????">?????????????????? </option>
              <option value="???????????????????????????">??????????????????????????? </option>
              <option value="???????????????????????????">??????????????????????????? </option>
              <option value="???????????????????????????">??????????????????????????? </option>
              <option value="?????????????????????">?????????????????????</option>
              <option value="????????????????????????">????????????????????????</option>
              <option value="??????????????????????????????">?????????????????????????????? </option>
              <option value="??????????????????">?????????????????? </option>
              <option value="?????????????????????">????????????????????? </option>
              <option value="???????????????">??????????????? </option>
              <option value="??????????????????">?????????????????? </option>
              <option value="???????????????????????????">??????????????????????????? </option>
              <option value="????????????????????????">???????????????????????? </option>
              <option value="????????????">???????????? </option>
              <option value="????????????">???????????? </option>
              <option value="?????????">????????? </option>
              <option value="?????????????????????">????????????????????? </option>
              <option value="??????????????????">?????????????????? </option>
              <option value="??????????????????">?????????????????? </option>
              <option value="??????????????????????????????">?????????????????????????????? </option>
              <option value="???????????????????????????????????????">??????????????????????????????????????? </option>
              <option value="???????????????????????????">??????????????????????????? </option>
              <option value="????????????????????????">???????????????????????? </option>
              <option value="????????????">???????????? </option>
              <option value="?????????????????????">????????????????????? </option>
              <option value="??????????????????">??????????????????</option>
              <option value="???????????????????????????">???????????????????????????</option>
              <option value="?????????????????????????????????????????????">????????????????????????????????????????????? </option>
              <option value="????????????????????????">???????????????????????? </option>
              <option value="??????????????????????????????">?????????????????????????????? </option>
              <option value="?????????????????????">????????????????????? </option>
              <option value="???????????????">??????????????? </option>
              <option value="?????????????????????????????????????????????">????????????????????????????????????????????? </option>
              <option value="???????????????">??????????????? </option>
              <option value="??????????????????">?????????????????? </option>
              <option value="????????????????????????">???????????????????????? </option>
              <option value="????????????????????????">???????????????????????? </option>
              <option value="???????????????????????????">??????????????????????????? </option>
              <option value="????????????">???????????? </option>
              <option value="??????????????????">?????????????????? </option>
              <option value="??????????????????">?????????????????? </option>
              <option value="???????????????????????????">??????????????????????????? </option>
              <option value="????????????????????????">???????????????????????? </option>
              <option value="??????????????????????????????">?????????????????????????????? </option>
              <option value="???????????????">??????????????? </option>
              <option value="????????????">???????????? </option>
              <option value="????????????????????????">???????????????????????? </option>
              <option value="???????????????">??????????????? </option>
              <option value="???????????????">??????????????? </option>
              <option value="?????????????????????">?????????????????????</option>
              <option value="??????????????????">?????????????????? </option>
              <option value="???????????????">??????????????? </option>
              <option value="???????????????">??????????????? </option>
              <option value="?????????">????????? </option>
              <option value="????????????????????????">????????????????????????</option>
              <option value="??????????????????">??????????????????</option>
              <option value="???????????????">??????????????? </option>
              <option value="???????????????????????????">??????????????????????????? </option>
              <option value="?????????????????????????????????">????????????????????????????????? </option>
              <option value="?????????????????????????????????">????????????????????????????????? </option>
              <option value="?????????????????????">????????????????????? </option>
              <option value="?????????????????????">????????????????????? </option>
              <option value="???????????????????????????">??????????????????????????? </option>
              <option value="?????????????????????">????????????????????? </option>
              <option value="??????????????????????????????">?????????????????????????????? </option>
              <option value="????????????????????????????????????">???????????????????????????????????? </option>
              <option value="????????????????????????">???????????????????????? </option>
              <option value="????????????">???????????? </option>
              <option value="?????????????????????">????????????????????? </option>
              <option value="?????????????????????????????????">????????????????????????????????? </option>
              <option value="??????????????????????????????">?????????????????????????????? </option>
              <option value="????????????????????????">???????????????????????? </option>
              <option value="???????????????????????????">??????????????????????????? </option>
              <option value="???????????????????????????">??????????????????????????? </option>
              <option value="?????????????????????????????????">?????????????????????????????????</option>
              <option value="?????????????????????">????????????????????? </option>
            </select>
          </div>
          <br>

          <div class="form-row">
            <label for="text">????????????????????????????????????*</label>
            <input type="text" required class="form-control" id="zip" value="????????????????????????????????????">
          </div>
          <br>

          <div class="form-row">
            <label for="text">???????????????????????????????????????????????????*</label>
            <input type="text" class="form-control" id="Phone" value="???????????????????????????????????????????????????">
          </div>
          <br>

          <div class="form-row">
            <label for="text">??????????????????????????????????????????*</label>
            <input type="text" required class="form-control" id="phone2" value="??????????????????????????????????????????">
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
    data += '"??????????????????????????????????????????":"' + $("#CID").val() + '",';
    data += '"????????????":"' + $("#fname").val() + '",';
    data += '"?????????????????????":"' + $("#lname").val() + '",';
    data += '"?????????":"' + $("#sex").val() + '",';
    data += '"????????????":"' + $("#branch").val() + '",';
    data += '"???????????????":"' + $("#religion").val() + '",';
    data += '"??????????????????????????????":"' + $("#address").val() + '",';
    data += '"?????????????????????":"' + $("#village").val() + '",';
    data += '"?????????":"' + $("#road").val() + '",';
    data += '"????????????/????????????":"' + $("#tambol").val() + '",';
    data += '"???????????????/?????????":"' + $("#koun").val() + '",';
    data += '"?????????????????????":"' + $("#province").val() + '",';
    data += '"????????????????????????????????????":"' + $("#zip").val() + '",';
    data += '"???????????????????????????????????????????????????":"' + $("#phone").val() + '",';
    data += '"??????????????????????????????????????????":"' + $("#Phone2").val() + '"';
    data += "}";
    console.log(JSON.parse(data));
  }
</script>

</html>
