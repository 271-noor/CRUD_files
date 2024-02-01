<?php
include "config.php";
if(isset($_POST['update']))
{
    $user_id = $_POST['id'];
    $name = $_POST['name'];
    $ram = $_POST['ram'];
    $rom = $_POST['rom'];
    $mrp = $_POST['mrp'];

    $sql = "UPDATE `mobile` SET `Name`='$name',`Ram`='$ram',`Rom`='$rom',`Mrp`='$mrp' 
    WHERE `id`='$user_id'";

    $result = $conn->query($sql);
    if($result == TRUE)
    {
        echo "Record updated successfully.";
    }
    else {
        echo "error.".$sql,"<br/>".$conn->connect_error;
    }
}
if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `mobile` WHERE `id`='$user_id'";
    
    $result = $conn->query($sql);

    if ($result->num_rows>0) {
        while ($row=$result->fetch_assoc()) {
            
            $name =  $row['Name'];
            $ram =  $row['Ram'];
            $rom =  $row['Rom'];
            $mrp =  $row['Mrp'];
            $id =  $row['id'];
        }
        ?>
       <html>

        <h2>User Update Form...</h2>
        <Form action="" method="post">

            <fieldset>
                <legend>Personal Information</legend>
               ID <input type="text" name="id" value="<?php echo $id;?>"> <br />
               Name <input type="text" name="name" value="<?php echo $name;?>">
              
                <br>
               RAM <input type="text" name="ram" value="<?php echo $ram;?>">
                <br>
               ROM <input type="text" name="rom" value="<?php echo $rom;?>">
                <br>
              MRP  <input type="text" name="mrp" value="<?php echo $mrp;?>">
                <!-- <br>
                GENDER: <br>
                <input type="radio" name="gender" value="Male" <?phpif ($gender=='Male') {
                   echo "checked";}?>>Male
                <input type="radio" name="gender" value="Female" <?phpif ($gender=='Female') {
                   echo "checked";}?>>Female -->
                   <br>
                   <input type="submit" name="update" value="update">
</fieldset>
</form>
</body>
</html>
<?php
}
else{
    header('location: view.php');
}
}
?>