<!DOCTYPE html>
<html lang="en">
<?php include "./../../admin/page_authorization.php";
      include "./../../header.php";
      session_start();
      $_SESSION["previousPage"] = "pages";
?>
    <title>Questionnaire</title>
</head>
<body>
    <div class="page-container">
        <?php
            include "./../../navbar.php";
        ?>
        <div class="form-header">
            Répondez à ce questionnaire pour nous faire part de votre ressenti et nous permettre d'améliorer votre expérience avec nos institution
            ( Ce questionnaire est anonyme et les informations collectées ne peuvent pas être utilisées pour retracer votre identité )
        </div>
        <div class="form">
            <form action="./../../API/stats/index.php" method="post">
                <p>1. Quelques informations sur vous :</p>
                <div class="row">
                    <label for="">Age</label>
                    <input type="number" width="200px">
                </div>
                <p>2. Votre lieu de vie :</p>
                <div class="row">
                    <label for="">Type de lieu de vie : </label>
                    <select name="" id="">
                        <option value="">Dans la famille en permanence</option>
                        <option value="">Dans la famille avec une solution d'accueil ou des activités en journée</option>
                        <option value="">Dans la famille principalement mais avec un accueil temporaire ou séquentiel en établissement</option>
                        <option value="">Dans un logement indépendant</option>
                        <option value="">Dans un habitat inclusif</option>
                        <option value="">Dans un foyer d'accueil médicalisé (FAM)</option>
                        <option value="">Dans une maison d'accueil spécialisé (MAS)</option>
                        <option value="">Dans un foyer de vie ou foyer d'hébergement</option>
                        <option value="">En IME avec internat</option>
                        <option value="">Hospitalisation en psychiatrie</option>
                        <option value="">Autre</option>
                    </select>
                </div>
                <br>
                <div class="row">
                    <div><label for="">Votre lieu de vie correspond-t-il à une orientation CDAPH?</label></div>
                    <div>
                        <input type="radio">
                        <label for="">oui</label>
                        <input type="radio">
                        <label for="">non</label>
                        <input type="radio">
                        <label for="">pas d'orientation CDAPH</label>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div><label for="">Le lieu de vie correspond-t-il à votre choix?</label></div>
                        <div>
                            <input type="radio">
                            <label for="">oui</label>
                            <input type="radio">
                            <label for="">non</label>
                        </div>
                    </div>
                <p>3. Vos besoins :</p>
                <div class="row">
                    <label for="">De quel type d'intervention avez vous besoin?</label>
                    <select name="" id="">
                        <option value="">Je suis totalement autonome</option>
                        <option value="">Une aide pour tous les actes de la vie quotidienne et la présence d'une tierce personne 24h/24h</option>
                        <option value="">Un soutien à l'autonomie pour les logement, l'accès à la santé, les loisirs, les démarches administratives</option>
                        <option value="">Des interventions et stimulations ponctuelles mais quotidiennes (toilettes, sorties, repas, communication)</option>
                    </select>
                </div>
                <p>4. Votre institution :</p>
                <div class="row">
                    <div> <label for="">Dans quel région se trouve votre institution?</label>
                    <select name="" id="">
                        <option value="">A l'international</option>
                        <option value="">Ile-de-France</option>
                        <option value="">Région Nord-Est</option>
                        <option value="">Région Nord-Ouest</option>
                        <option value="">Région Sud-Est</option>
                        <option value="">Région Sud-Ouest</option>
                    </select></div>
                </div>
                <br>
                <div class="row">
                    <label for="">Les dispositifs de l'associations réponds-t-il à vos besoins?</label>
                    <div>
                        <input type="radio">
                        <label for="">oui</label>
                        <input type="radio">
                        <label for="">non</label>
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="">si non, quels sont les changements que vous souhaitez avoir?</label>
                    <div>
                        <input class="comment" type="text">
                    </div>
                </div>
                <p class="form-header">Merci d'avoir pris le temps de répondre à notre questionnaire! Votre avis sera précieux pour l'amélioration de la qualité de nos services</p>
                <br><br><br>
                <button class="green-btn still-btn">envoyer</button>
            </form>
        </div>
    </div>
</body>
<style>
    body{
        margin:0;
    }
    .page-container {
        background-color: #E6DDCC;
        margin: 0;
        padding:20px;
    }
     .form{
        padding: 20px;
        text-align: left;
        margin: 50px;
        background-color: white;
        border-radius: 32px;
        font-family: "Source Sans 3", serif;
    }

    .form input{
        border-radius: 16px;
        border: 1px solid black;
        padding: 10px;
        margin: 10px 20px 10px 10px;
        font-size: 18px;
    }

    select {
        padding: 10px 20px;
        border-radius: 16px;
        margin : 0 20px;

    }

    p{
        font-size: 23px;
        font-weight: bold;
    }

    .form-header{
        font-family: "Montserrat";
        width: 80%;
        font-size: 16px;
        font-weight: 500;
        margin : auto;
        text-align: center;
        margin-top: 100px;
    }

    .comment{
        width : 80%;
        height : 300px;
    }
</style>
</html>