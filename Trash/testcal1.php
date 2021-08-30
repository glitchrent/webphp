<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script type="text/javascript">
        function sumunp() {

            for(i=1;i<=5;i++){
            
            var txtaddunit = document.getElementById('txtaddunit'+i).value;
            var result = parseInt(txtaddunit) += parseInt(txtaddunit);
            if (!isNaN(result)) {
                document.getElementById('totalunp').value = result;
            }
        }
        }
    </script>

<div>
    <?php for($n=0;$n<=4;$n++)  { ?>
        <input type="text" id="txtaddunit<?php echo $n;?>" onkeyup="sumunp()" />
        <br>
        

        <?php } ?>


        
        <br>
        <input type="text" id="totalunp" /> 
        <?php echo $n; ?>
<div>


