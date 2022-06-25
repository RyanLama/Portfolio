<?php
    include_once"config.php";

        $sql = "SELECT * FROM `messages`";
        
        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);

        $row = mysqli_fetch_assoc($result);

        ?>