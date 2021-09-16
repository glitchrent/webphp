<html>
<head>
<title>สมัครสมาชิก</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="cusregis_pc.php">
<h1 class="h3 mb-3 fw-normal">สมัครสมาชิก</h1>
  <table width="400" border="0" style="width: 400px">
    <tbody>
      <tr>
        <td width="125"> &nbsp;ชื่อผู้ใช้</td>
        <td width="180">
          <input name="txtusername" type="text" id="txtusername" size="20">
        </td>
      </tr>
      <tr>
        <td> &nbsp;รหัสผ่าน</td>
        <td><input name="txtpassword" type="password" id="txtpassword">
        </td>
      </tr>
      <tr>
        <td> &nbsp;ยืนยัน รหัสผ่าน</td>
        <td><input name="txtconpassword" type="password" id="txtconpassword">
        </td>
      </tr>
      <tr>
        <td>&nbsp;ชื่อจริง</td>
        <td><input name="txtfirstname" type="text" id="txttxtfirstname size="35"></td>
</tr>
<tr>
        <td>&nbsp;นามสกุล</td>
        <td><input name="txtlastname" type="text" id="txtlastname" size="35"></td>
      </tr>
      <tr>
        <td>&nbsp;ที่อยู่</td>
        <td><textarea name="txtaddress" type="text" id="txtaddress" size="35"></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;เบอร์โทร</td>
        <td><input name="txttel" type="text" id="txttel" size="35"></td>
      </tr>




    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="สมัครสมาชิก">
</form>

<a href="product.php">ย้อนกลับ</a>
</body>
</html>