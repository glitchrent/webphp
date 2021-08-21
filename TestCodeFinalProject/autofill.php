<?php require("conn.php");   ?> 
<html>
  
<head>
<script src="jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
  
<body>

    <div>
        <div>
                    <label>User Id</label>
                    <input type='text' list="datalistOptions" name="user_id" id='user_id' placeholder='id' onkeyup="GetDetail(this.value)" value="">
                    <datalist id="datalistOptions">
                    <option value="1">
                    <option value="2">
                    </datalist>
        </div>
        <div>
                    <label>First Name:</label>
                    <input type="text" name="first_name" id="first_name" placeholder='First Name' value="">
        </div>
        <div>
                    <label>Last Name:</label>
                    <input type="text" name="last_name" id="last_name" placeholder='Last Name' value="">
        </div>
    </div>
    <script>
  
        // onkeyup event will occur when the user 
        // release the key and calls the function
        // assigned to this event
        function GetDetail(str) {
            if (str.length == 0) {
                document.getElementById("first_name").value = "";
                document.getElementById("last_name").value = "";
                return;
            }
            else {
  
                // Creates a new XMLHttpRequest object
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
  
                    // Defines a function to be called when
                    // the readyState property changes
                    if (this.readyState == 4 && 
                            this.status == 200) {
                          
                        // Typical action to be performed
                        // when the document is ready
                        var myObj = JSON.parse(this.responseText);
  
                        // Returns the response data as a
                        // string and store this array in
                        // a variable assign the value 
                        // received to first name input field
                          
                        document.getElementById("first_name").value = myObj[0];
                          
                        // Assign the value received to
                        // last name input field
                        document.getElementById("last_name").value = myObj[1];
                    }
                };
  
                // xhttp.open("GET", "filename", true);
                xmlhttp.open("GET", "gfg.php?user_id=" + str, true);
                  
                // Sends the request to the server
                xmlhttp.send();
            }
        }
    </script>
</body>
  
</html>