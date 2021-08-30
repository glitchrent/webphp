<html>

<head></head>

<body>
<input type="number" id="" class="sumalltotal" value="0" /><br/>
<input type="number" id="" class="sumalltotal" value="0" /><br/>
<input type="number" id="" class="sumalltotal" value="0" /><br/>
<input type="number" id="" class="sumalltotal" value="0" /><br/>
<input type="number" id="totalresult" class="" /><br/>

</body>


<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
<script language="javascript">

var textboxes = document.querySelectorAll(".sumalltotal");
textboxes.forEach(function(box) {
  box.addEventListener("keyup", sumAll);
});

function sumAll() {
  var total = 0;
  textboxes.forEach(function(box) {
    var val;
    if (box.value == "") val = 0;
    else val = parseInt(box.value);
    total += val;
  });
  document.getElementById("totalresult").value = total;
}
</script>

</html>