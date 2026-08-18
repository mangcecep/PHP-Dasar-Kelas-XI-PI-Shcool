<?php 

include "../template/header.php";

$errorMessageName = "";

if(isset($_POST['name']) && isset($_POST['class_name'])){

    $name = $_POST['name'];
    $class_name = $_POST['class_name'];

    if($name == "" || $class_name == "") {
        $errorMessageName = "value name atau class tidak boleh kosong";
    } else {

        include "../connection/db.php";

        $safeName = htmlspecialchars($name);
        $safeClassName = htmlspecialchars($class_name);

        $query = "INSERT INTO list_student (name, class_name) VALUES ('$safeName', '$safeClassName')";
    
        $result = mysqli_query($connect, $query);
    
        if($result) {
            header("Location: /student.php");
        } else {
            // SESSION
        }
    }
}

?>

<h2>CREATE STUDENT</h2>
<a href="/student.php">Back To Student Page</a>
<p style="color:red"><?= $errorMessageName;  ?></p>


<form method="POST" action="/student/create.php">


    <label>Name</label>
    <input type="text" name="name" />
    <label>Class Room</label>
    <input type="text" name="class_name" />
    <button type="submit">Submit</button>
</form>