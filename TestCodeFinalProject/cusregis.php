<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
   
        <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">


    <title>เข้าสู่ระบบ</title>


    </head>

    







<body class="text-center">
<main class="form-signin">


<div class="faidpage">


<form name="form1" method="post" action="cusregis_pc.php">
<h1 class="h3 mb-3 fw-normal">สมัครสมาชิก</h1>
  <table width="400" border="0" style="width: 400px">
    <tbody>
      <tr>
        <td width="125"> &nbsp;ชื่อผู้ใช้ <l style="color:red">*</l></td>
        <td width="180">
          <input name="txtusername" class="form-control" type="text" id="txtusername" size="20">
        </td>
      </tr>
      <tr>
        <td> &nbsp;รหัสผ่าน <l style="color:red">*</l></td>
        <td><input name="txtpassword" class="form-control" type="password" id="txtpassword">
        </td>
      </tr>
      <tr>
        <td> &nbsp;ยืนยัน รหัสผ่าน <l style="color:red">*</l></td>
        <td><input name="txtconpassword" class="form-control" type="password" id="txtconpassword">
        </td>
      </tr>
      <tr>
        <td>&nbsp;ชื่อจริง <l style="color:red">*</l></td>
        <td><input name="txtfirstname" class="form-control" type="text" id="txttxtfirstname size="35"></td>
</tr>
<tr>
        <td>&nbsp;นามสกุล <l style="color:red">*</l></td>
        <td><input name="txtlastname" class="form-control" type="text" id="txtlastname" size="35"></td>
      </tr>
      <tr>
        <td>&nbsp;ที่อยู่ <l style="color:red">*</l></td>
        <td><textarea name="txtaddress" class="form-control" type="text" id="txtaddress" size="35"></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;เบอร์โทร <l style="color:red">*</l></td>
        <td><input name="txttel" type="text" class="form-control" id="txttel" size="35"></td>
      </tr>




    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="สมัครสมาชิก">
</form>

<a href="c_product.php">ย้อนกลับ</a>
</main>


</body>
</html>