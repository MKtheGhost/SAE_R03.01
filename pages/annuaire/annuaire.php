<!DOCTYPE html>
<html lang="en">
<?php include "./../../admin/page_authorization.php";
      include "./header.php" 
?>
    <title>Document</title>
</head>
<body>
    <div class="page-container">
        <?php
            include "./../../navbar.php";
        ?>
    </div>
    <div class="annuaire-department-filter">
        <button>A l'international</button>
        <button>Région Nord-Est</button>
        <button>Région Nord-Ouest</button>
        <button>Région Sud-Est</button>
        <button>Région Sud-Ouest</button>
        <!----- when clicked, button div is filled in with JS ----->
    </div>
</body>
</html>