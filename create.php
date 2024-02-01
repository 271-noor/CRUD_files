<?php
include "config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $ram = $_POST['ram'];
    $rom = $_POST['rom'];
    $mrp = $_POST['mrp'];

    $sql= "INSERT INTO `mobile`(`Name`,`Ram`,`Rom`,`Mrp`) 
    VALUES('$name','$ram','$rom','$mrp')";

    $result = $conn->query($sql);
    if ($result==TRUE) {
        echo "New record created successfully.";
    }
    else {
        echo "error.".$sql, "<br />" .$conn->connect_error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Signup Form</h1>   
    <form action=""method="post">
        <fieldset>
            <legend>Personal Information</legend>
            Name: <br>
            <input type="text" name="name">
            <br>

            RAM: <br>
            <input type="text" name="ram">
            <br>

            ROM: <br>
            <input type="text" name="rom">
            <br>

            MRP: <br>
            <input type="number" name="mrp">
            <br><br>

            <input type="submit" name="submit" value="submit">
            
        </fieldset>
    </form>
</body>
</html>