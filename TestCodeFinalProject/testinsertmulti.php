<?php require("conn.php");  ?>  

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        var html = '<tr><td><input class="form-control" list="datalistOptions" name="testname[]" ><datalist id="datalistOptions"></datalist><input class="form-control" name="testamount[]" require=""><input type="button" name="remove" id="remove" value="remove"></td></tr>';

        var x = 1;

        $("#add").click(function(){
            $("#table_field").append(html);
        });
        $("#table_field").on('click','#remove',function(){
            $(this).closest('tr').remove();
        });
    });
</script>
</head>

<body>
<form class="insert-form" id="insert_form" method="post" action="">
    <table id="table_field">

<!--  -->
    <?php

    if (isset($_POST['save'])) {
        $testname = $_POST['testname'];
        $testamount = $_POST['testamount'];

        foreach ($testname as $key => $value){
            $save = "INSERT INTO testmulti(testname,testamount)VALUES('".$value."','".$testamount[$key]."')";
            $query = mysqli_query($check,$save) or die(mysqli_error($check));
            $save2 = "UPDATE product SET remainUnit = remainUnit-'".$testamount[$key]."' WHERE productName ='".$value."' ";
            $query2 = mysqli_query($check,$save2) or die(mysqli_error($check));
        }
            
        }

    
    

    ?>
        <tr>
        <td>
<?php
$data = "SELECT *  FROM product";
$dataQuery = mysqli_query($check, $data);
?>
<input class="form-control" list="datalistOptions" name="testname[]" placeholder="">
<input class="form-control" type="text" name="testamount[]" require="">
<datalist id="datalistOptions">
<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>
  <option value="<?php echo $dataResult["productName"]; ?>">

<?php
  }   
?>
</datalist>
<input type="button" name="addd" id="add" value="Add">
</tr>
</td>
</tabel>
<input type="submit" name="save" id="save" value="Save Data">
</form>
</body>
</html>