<?php

$con = mysqli_connect("localhost","root","", "chatapp");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>