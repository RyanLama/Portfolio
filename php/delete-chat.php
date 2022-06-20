<?php
include_once "config.php";

$msg_id = $_POST['msg_id'];
            
            $sql = "DELETE FROM messages WHERE `messages`.`msg_id` = 18";
            mysql_select_db('chatapp');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "Deleted data successfully\n";
            
            mysql_close($conn);
?>