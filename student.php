<?php 

include ("./connection/db.php");
include("./template/header.php"); 

$query = "SELECT * FROM list_student";

$data = mysqli_query($connect, $query);

$no = 1;
?>


<div class="container mt-4">
    <h2 class="text-center">List Student</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name.</th>
                <th>Class Name.</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $row) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['class_name'] ?></td>
                    <td>
                        <a
                        class="btn btn-primary"
                        href="/student/detail.php?id=<?= $row['id'] ?>">
                            Detail
                        </a>
                        <a 
                        class="btn btn-warning" 
                        href="/student/update.php/<?= $row['id'] ?>">
                            Update
                        </a>
                        <a 
                        class="btn btn-danger"
                        href="/student/delete.php/<?= $row['id'] ?>">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
    </table>
</div>


<?php include "./template/footer.php" ; ?>