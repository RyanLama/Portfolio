<?php
    include_once"config.php";

    if (isset($_POST["msg_id"]) && !empty($_POST["msg_id"])) {
        $msg = $_POST["msg_id"];
    
        $query = "DELETE FROM messages WHERE msg_id = '$msg'";
    
        mysqli_close($conn);
    } else {
            echo "Something went wrong. Please try again later.";
            exit();
    }
    ?>

    





?>