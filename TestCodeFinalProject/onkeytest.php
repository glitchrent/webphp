<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script type="text/javascript">
        function sumunp() {
            var txtaddunit = document.getElementById('txtaddunit').value;
            var txtprice = document.getElementById('txtprice').value;
            var result = parseInt(txtaddunit) * parseInt(txtprice);
            if (!isNaN(result)) {
                document.getElementById('totalunp').value = result;
            }
        }
    </script>

<div>
        <input type="text" id="txtaddunit" onkeyup="sumunp()" />
        <input type="text" id="txtprice" onkeyup="sumunp()" />
        <input type="text" id="totalunp" />
<div>
