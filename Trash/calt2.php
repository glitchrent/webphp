<html>
<head>
<title></title>
</head>
<body>
<script language="javascript">
function chibi(){
	var t1;
	var sum;
	t1=parseFloat(document.form1.text.value);
	sum=t1 * 5500 * <?php echo $row_Recordset1['baht']; ?>;
	document.form1.total.value=sum;

}
</script>
<form action="#" method="post" name="form1">
<input type="text" name="text" id="text" value="" Onchange="JavaScript:return chibi();"/>


<input type="image" name="btn" id="btn" src="martin.png" width="35" height="35">
<input type="text" name="total" id="total"/>

<?php echo $row_Recordset1['baht']; ?>
</form>
</body>
</html>