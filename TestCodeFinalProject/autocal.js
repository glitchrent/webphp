
function sumunp() {         
    
    for(n=1;n<=n;n++){
        
        var txtaddunit = document.getElementById('txtaddunit'+n).value;
        var txtprice = document.getElementById('txtprice'+n).value;
        var result = parseInt(txtaddunit) * parseInt(txtprice);
         if (!isNaN(result)) {

            document.getElementById('totalunp'+n).value = result;

            } 
            var total = 0;
    var textboxes = document.querySelectorAll(".sumalltotal");
            textboxes.forEach(function(box) {
            var val;
            if (box.value == "") val = 0;
            else val = parseInt(box.value);
            total += val;
        });
    document.getElementById("totalresult").value = total;

            }
            
        }
        