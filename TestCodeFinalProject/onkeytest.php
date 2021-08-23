<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script type="text/javascript">
        function sumunp() {

            for(i=1;i<=5;i++){

            
            var txtaddunit = document.getElementById('txtaddunit'+i).value;
            var txtprice = document.getElementById('txtprice'+i).value;
            var result = parseInt(txtaddunit) * parseInt(txtprice);
            if (!isNaN(result)) {
                document.getElementById('totalunp'+i).value = result;
            }
        }
        }
    </script>

<div>
    <?php for($i=1;$i<=2;$i++)  { ?>
        <input type="text" id="txtaddunit<?php echo $i;?>" onkeyup="sumunp()" />
        <input type="text" id="txtprice<?php echo $i;?>" onkeyup="sumunp()" />
        <input type="text" id="totalunp<?php echo $i;?>" /> <br>
        

        <?php } ?>
<div>


