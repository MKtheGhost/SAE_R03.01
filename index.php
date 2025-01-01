<!DOCTYPE html>
<html lang="en">

<?php include "./header.php" ?>

    <title>Accueil</title>
</head>

<body>
    <div class="page-container">
        <?php
            include "./navbar.php";
        ?>
        <div class="index-header">
            <!---Image --->
            <p>FNAPSY</p>
            <p>présentation du site</p>
        </div>
        <div class="index-services">
            <p>nos services</p>
            <div class="services">
                <div class="service">
                    <!---image--->
                    <p>text</p>
                </div>
                <div class="service">
                    <!---image--->
                    <p>text</p>
                </div>
                <div class="service">
                    <!---image--->
                    <p>text</p>
                </div>
            </div>
        </div>
        <?php
            include "./footer.php";
        ?>
    </div>

</body>
<style>
    body{
        margin : 0;
        padding : 0;
    }
    .page-container{
        background-color: #E6DDCC;
        margin : 0;
        padding : 0;
        font-family: "Montserrat", serif;
        font-weight: bold;
    }
</style>
</html>