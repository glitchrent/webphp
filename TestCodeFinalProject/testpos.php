<?php require("conn.php");   ?>

<?php

$search=isset($_GET['search']) ? $_GET['search']:'';

$data = "SELECT *  FROM product WHERE productName Like '%$search%'";
$dataQuery = mysqli_query($check, $data);

?>


<html>
    
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<title></title>
</head>
<body>   
<div class="field_wrapper">     <div>         
    

<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

  <option value="<?php echo $dataResult["productName"]; ?>">

<?php
  }   
?>

</datalist>

<input name="username" type="text" class="form-control" id="exampleInput" >
<input name="username" type="text" class="form-control" id="exampleInput" >

<a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>     </div> </div>

 



</body>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper

    
<?php  
for ($x = 0; $x <= 10; $x++) {
 

  ?>
    var fieldHTML = '<div><input class="form-control" list="datalistOptions" id="exampleDataList<?php echo "$x"; ?>" placeholder="Type to search..."><datalist id="datalistOptions"></datalist><input name="username" type="text" class="form-control" id="exampleInput" ><input name="username" type="text" class="form-control" id="exampleInput" ><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
   
    <?php
}
?> 

    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>





</html>