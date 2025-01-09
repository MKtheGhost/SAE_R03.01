<!DOCTYPE html>
<html lang="en">

<?php include "./admin/page_authorization.php";
      include "./header.php";
      session_start();

      if (isset($_SESSION["userCreated"])) {
        if ($_SESSION["userCreated"] == true){
            echo '<script>alert("User has been created succesfully")</script>';
        } else {
            echo '<script>alert("Unable to create user")</script>';
        }
        unset($_SESSION["userCreated"]);
      }
?>
    <script defer src="./index.js"></script>
    <title>Accueil</title>
</head>

<body>
    <div class="page-container">
        <div class="index-presentation">
            <?php
                include "./navbar.php";
            ?>
            <div class="index-header">
                <p class="site-name">FNAPSY</p>
                <p class="site-presentation">Bienvenue sur le Site Internet de la FNAPSY - Fédération Nationale des Association d'Usagers en Psychiatrie</p>
            </div>
        </div>

        <div class="index-explanation">
            <p class="index-h1">Pour un monde plus spy</p>
            <p class="index-text1">Notre site a été conçu pour faciliter l'accès des Associations aux Usagers, ainsi vous retrouverez notre annuaire par régions et une page de présentation pour chacune de nos Associations affiliées.</p>
        </div>

        <div class="index-services">
            <p class = "index-h2">nos services :</p>
            <div class="services">
                <div class="services-block">
                    <div class="service">
                        <img class="index-img" src="./images/annuaire_img.png" alt="annuaire">
                        <div class="service-text">
                            <p class="index-h2">Nos assos par région</p>
                            <p class="index-text2">Rechercher l’association la plus proche</p>
                        </div>
                    </div>
                    <div class="service">
                        <img class="index-img" src="./images/agenda_img.png" alt="annuaire">
                        <div class="service-text">
                            <p class="index-h2">Notre agenda</p>
                            <p class="index-text2">Les activités de notre fédération</p>
                        </div>
                    </div>
                </div>

                <div class="service-news">
                    <div class="index-h2 actu-header"> Nos actus :</div>
                    <div class="index-news">
                    </div>
                    <div class="index-news">
                    </div>
                    <div class="index-news">
                    </div>
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
        background-color: #E6DDCC;
    }
    .page-container{
        margin : 0;
        padding : 0;
    }

    .index-presentation{
        background: url(./images/index_background.png);
        background-size: auto 300%;
        background-size: cover;
        background-repeat: no-repeat;
        color: white;
        margin : 40px;
        max-width: fit-content;
        margin-left: auto;
        margin-right: auto;
        
    }
    .index-header{
        margin : 80px 30px 30px 30px;
        padding-bottom : 0.05px;
    }
    .site-name{
        font-size : 150px;
        font-family: "Montserrat", serif;
        font-weight: bold;
    }
    .site-presentation{
        font-family: "Source Sans 3", serif;
        font-size: 30px;
        width: 700px;
        margin : 20px;
    }
    .index-explanation{
        text-align : center;
        margin : 50px;
        margin-top: 100px;
    }

    .index-h1{
        font-family: "Montserrat", serif;
        font-weight: bold;
        font-size: 54px;
    }

    .index-text1{
        font-family: "Source Sans 3", serif;
        font-size: 24px;
        width: 700px;
        margin-left : auto;
        margin-right : auto;
    }

    .index-h2{
        font-family: "Montserrat", serif;
        font-weight: bold;
        font-size: 28px;
    }
    .index-services{
        margin : 100px 30px;
    }
    .services{
        display : flex;
        margin-left : auto;
        margin-right : auto;
    }

    .service{
        background-color: #85A27A;
        border-radius: 16px;
        width : 275px;
        height : 478px;
        margin : 10px 20px;
        float : left;
    }
    .index-img{
        width : 255px;
        height : 235px;
        margin : 10px 10px 0 10px;
    }

    .service-text{
        margin : 0 10px;
    }

    .index-text2{
        font-family: "Source Sans 3", serif;
        font-size: 18px;
    }

    .service-news{
        border-radius: 16px;
        background-color: #FFFFFF;
        height : 478px;
        width : 50%;
        margin : 10px 20px;
    }

    .index-news{
        background-color: #D9D9D9;
        margin : 10px 20px;
        height : 25%;
        border-radius: 16px;
        display: flex;

    }

    .actu-header{
        margin : 10px 20px;
    }
</style>
</html>