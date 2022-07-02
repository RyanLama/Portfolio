<?php
session_start();
    include_once"config.php";
    
    $msg_id = $_GET['outgoing_msg_id'];
    
    
    $sql = "DELETE FROM `messages` WHERE `outgoing_msg_id` = $msg_id[outgoing_msg_id]";



        
?>