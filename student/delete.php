<?php 

include "../template/header.php";
include "../connection/db.php";

$id = $_GET['id'];
$query = "DELETE FROM list_student WHERE id = $id";
$data = mysqli_query($connect, $query);

if($data) {
    header("Location: /student.php");
} else {
// SESSION
}

        ?>