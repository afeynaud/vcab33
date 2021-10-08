<!DOCTYPE html>

<html lang='fr'>

<head>
    <link rel='stylesheet' href='css/style.css'>
    <link rel="icon" type="image/png" href="src/img/favicon.png" />
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
                    <a href='/src/pages/reservation-tarifs.php'><button>Réserver et voir le détail des tarifs</button></a>
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
                <a href='/src/pages/devis-entreprises.php'><button>Demander un devis</button></a>
            </div>
        </div>

        <div class='container'>
            <div class='flex-item-left'>
                <h2>Devenez partenaires</h2>
                <p>Vous souhaitez donner un nouvel élan à votre carrière</br> professionnelle et intégrer nos équipes.</p>
                <a href='/src/pages/devenir-partenaires.php'><button>Rejoignez-nous</button></a>
            </div>

            <div class='flex-item-right'>
                <div class=''>
                    <img src='https://i.imgur.com/7Q23Twb.jpg' alt='chauffeur-prive-berline'>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class='container-size'>
            <h2>Actualités</h2>
            <p>Découvrez l’actualité de Vcab 33 au travers d’interviews de nos conducteurs, de conseils d’entretiens et d’articles sur notre vision du métier de chauffeur privé.</p>
        </div>
        <main class="container articles-cards articles-container">
            <article class="articles-card">
                <img class="articles-card" src="src/img/home/chauffeur-alfred.jpg" alt="chauffeur privé Alfred">
                <div class="text articles-card-textarea">
                    <span class='articles-card-title'>Interview d'Alfred</span>
                    <p>Nous avons interviewé notre chauffeur Alfred sur sa vision du métier et... <a href='/'>En savoir plus</a></p>
                <div class='articles-cards-keywords articles-cards-keywords-float'>Nos chauffeurs</div>
                <div class='articles-cards-keywords articles-cards-keywords-float'>Éthique</div>
                <div class='articles-cards-keywords articles-cards-keywords-float'>Métier</div>
                </div>
            </article>
            <article class="articles-card">
                <img class="articles-card" src="src/img/home/vcab33-bruges.jpg" alt="vcab 33 chauffeur privé bordeaux bruges">
                <div class="text articles-card-textarea">
                    <span class='articles-card-title'>Vcab 33 s'installe à Bruges</span>
                    <p>Pour être toujours plus réactifs et à l'écoute de nos clients, nous nous installons à... <a href='/'>En savoir plus</a></p>
                    <div class='articles-cards-keywords articles-cards-keywords-float'>Vcab33</div>
                    <div class='articles-cards-keywords articles-cards-keywords-float'>Agences</div>
                    <div class='articles-cards-keywords articles-cards-keywords-float'>Bordeaux</div>
                </div>
            </article>
            <article class="articles-card">
                <img class="articles-card" src="src/img/home/vcab-nouvelles-voitures-octobre21.jpg" alt="vcab 33 nouvelles voitures octobre 2021">
                <div class="text articles-card-textarea">
                    <span class='articles-card-title'>Nos nouveaux véhicules du mois d'Octobre 2021</span>
                    <p>De nouveaux véhicules disponibles en octobre pour toujours plus répondre à vos attentes... <a href='/'>En savoir plus</a></p>
                    <div class='articles-cards-keywords articles-cards-keywords-float'>Véhicules</div>
                    <div class='articles-cards-keywords articles-cards-keywords-float'>Service client</div>
                </div>
            </article>
        </main>
    </section>

    <section>
        <div class='container-size container-avis'>
            <h2>Avis</h2>
            <p>Nous remercions tous nos clients et partenaires sans qui tout cela ne serait pas possible.</p>
            <div class='avis-block'>
                <img src='https://www.elle.be/fr/wp-content/uploads/2015/08/Picard-Facepalm.jpg' alt='Avatar' class='avis-float avis-profile-picture'>
                <p class='avis-float'><i class='fa fa-star' style='color: yellow'></i><i class='fa fa-star' style='color: yellow'></i><i class='fa fa-star' style='color: yellow'></i><i class='fa fa-star' style='color: yellow'></i><i class='fa-solid fa-star-half' style='color: yellow'></i></p>
                <p><b>Jean Neymar</b></p>
                <p>D’habitude j’en ai vraiment marre des trajets en taxis mais Vcab 33 m’a fait voir ces trajets sous un nouvel angle. Des chauffeurs polis, à l’écoute et très professionnels.</p>
            </div>
        </div>
    </section>

    <section>
        <div class='container-size'>
            <h2>Contact</h2>
            <p>Quelques soient vos besoins, nous sommes à votre disposition pour répondre à toutes vos questions et trouver ensemble des solutions à vos problématiques.</p>
            <p>Tel : +33 6 04 52 62 01</p>
            <p>Mail : vab33@gmail.com</p>
        </div>

        <div class='container-form1'>
        <?php require './templates/form.php' ?>
        </div>
    </section>

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
