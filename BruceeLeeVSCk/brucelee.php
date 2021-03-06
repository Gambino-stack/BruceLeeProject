<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bruce Lee </title>
    <link rel="stylesheet" href="brucelee.css">
    <link href="//db.onlinewebfonts.com/c/d5e638ad62a611f703a8e0e951853da0?family=Herculanum" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aladin&family=Kaushan+Script&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/77eb99c5abc837144cabc9c07da37109?family=Emirates+Bold" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
require('header.php');
?>


<section class="container">
    <div id="container-left">
        <?php
        require('punchingball.php');
        ?>
    </div>
    <div id="container-right">
        <?php
        require('description.php');
        ?>
    </div>
</section>


<div class="separate">
    <img class="nunchaku" src="../img/nunchaku.png" alt="nunchaku">
</div>
<?php
require('sidebar.php');
?>
<div class="separate">
    <img class="nunchaku" src="../img/nunchaku.png" alt="nunchaku">
</div>
<?php
require('formations.php');
?>
<div class="separate">
    <img class="nunchaku" src="../img/nunchaku.png" alt="nunchaku">
</div>
<?php
require('experiences.php');
?>
<div class="separate">
    <img class="nunchaku" src="../img/nunchaku.png" alt="nunchaku">
</div>
<?php 
require('form.php');
?>
<br><br>
<?php
require('footer.php');
?>
</body>
</html>