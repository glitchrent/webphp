<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 

<!-- texteditor -->
<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

<form action="testdecrip_pc.php" method="post"  >



<textarea name="detail" id="editor1"></textarea>
<script>
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace('detail');
function CKupdate() {
for (instance in CKEDITOR.instances)
CKEDITOR.instances[instance].updateElement();
}
</script>




<input type="submit" value="save">

</form>

<!-- texteditor -->

<?php
$strSQL = "SELECT * FROM testdexctrip";
$objQuery = mysqli_query($check, $strSQL) or die(mysql_error());

?>

<table border="1">

<?php
  while($objResult = mysqli_fetch_array($objQuery))
  {
  ?>
<tr>
    <td>
<?php echo $objResult["descID"];?> 
  </td>
</tr>

<tr>
<td>
<?php echo $objResult["despo"]; ?>
  </td>
</tr>

<?php } ?>
</table>

