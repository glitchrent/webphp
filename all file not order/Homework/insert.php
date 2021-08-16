<?php

require('connect.php');

mysqli_set_charset($conn,"utf8");

?>

<html>
<head></head>
<body>
    <h2>Insert Data : Employee</h2>
    <form action="insertprocess.php" method="post" name="Employee">
        <table>
            <tr>
                <td>EmployeeID : </td>
                <td><input type="text" name="EmployeeID"></td>
            </tr>
            <tr>
                <td>Title : </td>
                <td><select name="Title">
                        <option value=นาย>นาย</option>
                        <option value=นางสาว>นางสาว</option>
                        <option value=นาง>นาง</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Name : </td>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr>
                <td>Sex : </td>
                <td>
                    <input type="radio" name="Sex" value="ชาย"> ชาย
                    <input type="radio" name="Sex" value="หญิง"> หญิง
                </td>
            </tr>
            <tr>
                <td>Education : </td>
                <td><select name="Education">
                        <option value=ปริญญาตรี>ปริญญาตรี</option>
                        <option value=ปริญญาโท>ปริญญาโท</option>
                        <option value=อื่นๆ>อื่นๆ</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Start_Date : </td>
                <td><input type="date" name="Start_Date"></td>
            </tr>
            <tr>
                <td>Salary : </td>
                <td><input type="text" name="Salary"></td>
            </tr>
            <tr>
                <td>DepartmentID : </td>
                <?php

                require('connect.php');
                $sql = 'SELECT DepertmentName,DepertmentID FROM depertment;
    ';
                $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                <td><select name="DepartmentName">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["DepertmentID"]; ?>><?php echo $objResult["DepertmentName"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Insert Data">
    </form>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>