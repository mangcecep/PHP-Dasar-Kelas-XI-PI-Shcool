<?php 

include "../template/header.php";
include "../connection/db.php";

$id = $_GET['id'];
$query = "SELECT * FROM list_student WHERE id = $id";
$data = mysqli_query($connect, $query);

// echo "KONEKSI DATA UNTUK DATA BASE ADA DATANYA GAK?" . mysqli_num_rows($data);
$no = 1;
?>
<h1>Student Detail</h1>
<a href="/student.php">Back To Student Page</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name.</th>
                <th>Class Name.</th>
            </tr>
        </thead>
        <?php if(mysqli_num_rows($data) == 0) : ?>
            <tbody>
                <tr>
                    <td colspan="3">Tidak Ada Data</td>
                </tr>
            </tbody>
        <?php else : ?>
             <?php foreach($data as $row) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['class_name'] ?></td>
                    
                </tr>
            <?php endforeach ?>
        <?php endif ?>
        <tbody>
           
    </table>
</div>