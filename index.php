<!DOCTYPE html>

<html lang='fr'>

<head>
    <link rel='stylesheet' href='css/style.css'>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Vcab 33 : chauffeurs privés à Bordeaux et en Gironde</title>
</head>    

<body>

<?php require './templates/header.php' ?>
<?php require './templates/nav-menu.php' ?>
    <h1>Vcab 33 : chauffeurs privés à Bordeaux et en Gironde</h1>
<?php require './templates/slider.php' ?>
    <section>
            <div class='container'>
                <div class='flex-item-left'>
                    <h2>Réservations et tarifs</h2>
                    <p>Nos chauffeurs sont à votre disposition à partir de 20 €.</p>
                    <button>Réserver et voir le détail des tarifs</button>
                </div>

                <div class='flex-item-right'>
                    <div class='reservationsImgOne'>
                        <img src='https://i.imgur.com/Id1FodU.jpg' alt='chauffeur-prive-berline'>
                    </div>
                </div>
            </div>

        <div class='container'>
            <div class='flex-item-left'>
                <div class='reservationsImgOne'>
                    <img src='https://i.imgur.com/Id1FodU.jpg' alt='chauffeur-prive-berline'>
                </div>
            </div>

            <div class='flex-item-right'>
                <h2>Devis entreprises</h2>
                <p>Vous êtes une entreprise et avez besoin de services particuliers.</p>
                <button>Réserver et voir le détail des tarifs</button>
            </div>
        </div>

        <div class='container'>
            <div class='flex-item-left'>
                <h2>Devenez partenaires</h2>
                <p>Vous souhaitez donner un nouvel élan à votre carrière professionnelle et intégrer nos équipes.</p>
                <button>Réserver et voir le détail des tarifs</button>
            </div>

            <div class='flex-item-right'>
                <div class='reservationsImgOne'>
                    <img src='https://i.imgur.com/Id1FodU.jpg' alt='chauffeur-prive-berline'>
                </div>
            </div>
        </div>
    </section>

<?php require './templates/form.php' ?>
<?php require './templates/footer.php' ?>

<script src='navbar.js'></script>
<script src='./scripts/slider.js'></script>

</body>
</html> 
