<?php
    $conn = mysqli_connect("localhost", "root", "", "bearbrick");

        if(!$conn) {
            die("Failed to connect to database " . mysqli_error($conn));
        }else{
            echo " success *-* ";
        }
    
?>