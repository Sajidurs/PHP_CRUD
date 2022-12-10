<?php

    // Connecting Database
    $con =new mysqli('localhost', 'root', '', 'crud');

    if($con){
        die(mysqli_error($con));
    }

?>