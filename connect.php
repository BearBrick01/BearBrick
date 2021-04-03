<?php
    $conn = mysqli_connect("localhost", "root", "1111", "bear02");

        if(!$conn) {
            die("Failed to connect to database " . mysqli_error($conn));
        }else{
            echo " success *-* ";
        }
    
?>