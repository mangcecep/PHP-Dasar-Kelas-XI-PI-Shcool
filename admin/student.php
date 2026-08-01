<?php 

include("../template/header.php"); 

$listStudent = [
    "Zamzam", 
    "ezra", 
    "Defrico",
    "Salwa",
    "Fadli",
    "Yophi",
    "Agung",
    "Nathan",
    "Azis",
    "Diaz"
];

?>

<h1>List Student <?= count($listStudent); ?> Siswa </h1>

<ul>
    <?php foreach($listStudent as $student) : ?>
        <li> <?php echo $student ?></li>
    <?php endforeach ?>

    <br/>

    <?php for($i=0; $i < count($listStudent); $i++) : ?>
        <li> <?php echo $listStudent[$i]; ?></li>
    <?php endfor ?>
</ul>

<ul>
    <?php for($i=0; $i < count($listStudent); $i++) : ?>
        <li 
        <?php if($i % 2 == 0) { ?>
        style="color:blue"
        <?php  } else { ?>
        style="color:red"
        <?php }?>
        >
        <?php echo $listStudent[$i]; ?>
    
    </li>
    <?php endfor ?>
</ul>




<?php include "../template/footer.php" ; ?>