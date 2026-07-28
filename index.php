<?php
$name = "Rico";
$age = 16;
$schoolName = "PI School";
$gender = false;

$male = $gender ? "Laki-laki" : "Perempuan"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="./style/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <h1>
    <?= "Halo nama saya  $name , umur: $age  tahun, saya sekolah di $schoolName, saya adalah seorang: $male."; ?>
    </h1>

    <h2 class="text-danger"><?= $name ;?></h2>
    <h2 class="text-primary"><?= $name ;?></h2>
    <h2 class="text-success"><?= $name ;?></h2>
    <h2 class="text-info"><?= $name ;?></h2>


    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>

