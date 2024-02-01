<?php
include "config.php";

if (isset($_GET['id'])) {
    
    $user_id = $_GET['id'];
    $sql = "DELETE FROM `mobile` WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result==TRUE) {
        echo "Record Deleted successfully.";
    }
    else {
        echo "error.".$sql,"<br />".$conn->connect_error;
    }
}
?>