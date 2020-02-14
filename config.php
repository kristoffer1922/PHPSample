<?php

$conn = new mysqli("localhost", "root", "", "phpcrud");

if($conn->connect_error){
    die("Could not connect".$conn->conn_error);
}
?>