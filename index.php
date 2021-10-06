<!DOCTYPE html>

<html lang='fr'>

<head>
    <link rel='stylesheet' href='css/style.css'>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Vcab 33 : chauffeurs privés à Bordeaux et en Gironde</title>
    <meta name='description' content='Vcab33 : chauffeurs privés à Bordeaux et en Gironde pour particuliers, professionnels et entreprises. Tarifs ECO, de groupes et offre VIP.'>
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
                    <div class='img-margin-left'>
                        <img src='https://i.imgur.com/YqCIVCh.jpg' alt='chauffeur-prive-berline'>
                    </div>
                </div>
            </div>

        <div class='container container-reversed'>
            <div class='flex-item-left'>
                <div class='s'>
                    <img src='https://i.imgur.com/4THIQbQ.jpg' alt='chauffeur-prive-berline'>
                </div>
            </div>

            <div class='flex-item-right'>
                <h2>Devis entreprises</h2>
                <p>Vous êtes une entreprise et avez besoin</br>de services particuliers.</p>
                <button>Réserver et voir le détail des tarifs</button>
            </div>
        </div>

        <div class='container'>
            <div class='flex-item-left'>
                <h2>Devenez partenaires</h2>
                <p>Vous souhaitez donner un nouvel élan à votre carrière</br> professionnelle et intégrer nos équipes.</p>
                <button>Réserver et voir le détail des tarifs</button>
            </div>

            <div class='flex-item-right'>
                <div class=''>
                    <img src='https://i.imgur.com/7Q23Twb.jpg' alt='chauffeur-prive-berline'>
                </div>
            </div>
        </div>
    </section>

<?php require './templates/form.php' ?>
<?php require './templates/footer.php' ?>

<script src='./scripts/navbar.js'></script>
<script src='./scripts/slider.js'></script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Bordeaux, France",
            "postalCode": "33000",
            "streetAddress": "Place de la Bourse"
        },
        "email": "vcab33@gmail.com",
        "member": [
            {
                "@type": "Organization",
                "name": "Nicolas Lebrun"
            }
        ],
        "name": "Vcab 33",
        "telephone": "( 33 6) 04 52 62 01",
        "contactPoint" : [
            { "@type" : "ContactPoint",
                "telephone" : "( 33 6) 04 52 62 01",
                "contactType" : "Service clients et entreprises"
            }
        ]
    }
</script>
</body>
</html> 
