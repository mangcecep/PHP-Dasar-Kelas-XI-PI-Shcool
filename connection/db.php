<?php

$host = "localhost";
$user = "root";
$password = "JanganLupa321!";
$db_name = "list_student";

$connect = mysqli_connect($host, $user, $password, $db_name);

if (!$connect) {    
    echo "DB Connection Fail!";
}