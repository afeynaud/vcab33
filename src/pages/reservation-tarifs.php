<!DOCTYPE html>

<html lang='fr'>

<head>
    <link rel='stylesheet' href='../../css/style.css'>
    <link rel="icon" type="image/png" href="../../src/img/favicon.png" />
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Réservation et tarifs - Vcab 33 chauffeurs privés</title>
</head>

<body>

<?php
    require '../../templates/header.php';
    require '../../templates/nav-menu.php';
    require '../../data/runs-global-informations.php';
?>

<h1>Réservation et tarifs</h1>
  <h2 class="container">Nos gammes de transport</h2>
      <main class="container cards">
        <article class="card">
          <img class="card" src="https://i.imgur.com/7csXwhX.jpg" alt="gamme économique">
          <div class="text">
            <h3>GAMME ECO</h3>
            <p>Voyagez à bord d’une berline économique vous procurant tout le confort nécessaire pour profiter au mieux de votre trajet.</p>        
          </div>
        </article>
        <article class="card">
          <img class="card" src="https://i.imgur.com/Pfzu4Gk.jpg" alt="gamme vip">
          <div class="text">
            <h3>GAMME VIP</h3>
            <p>Avec l’offre VIP, nous vous transportons dans un véhicule haut de gamme avec vitres teintées. Le service à bord est personnalisé selon vos exigences et votre conducteur habilité à assurer votre sécurité.</p>           
          </div>
        </article>
        <article class="card">
          <img class="card" src="https://i.imgur.com/CXyiqEq.jpg" alt="gamme van">
          <div class="text">
            <h3>GAMME VAN</h3>
            <p>Notre gamme VAN est spécialement adaptée au transport de groupe. Nous vous garantissons bien évidemment un service à la hauteur de notre réputation.</p>
          </div>
        </article>
      </main>
<section>
    <h2 class='container'>Exemples de tarifs</h2>
    <div class='container-table'>
        <table id='prices-table'>
            <tr>
                <th>Départ</th>
                <th>Arrivée</th>
                <th>Temps</th>
                <th>Distance</th>
                <th>Gamme</th>
                <th>Tarif 1 personne</th>
            </tr>
            <tr>
                <td>Bordeaux Gare Saint-Jean</td>
                <td>Hippodrome de Bordeaux Le Bouscat</td>
                <td>30 min</td>
                <td>17,2 km</td>
                <td>Gamme ECO</td>
                <td>20 €</td>
            </tr>
            <tr>
                <td>Bordeaux Place de la Bourse</td>
                <td>Aéroport de Bordeaux Mérignac</td>
                <td>27 min</td>
                <td>23,8 km</td>
                <td>Gamme VAN</td>
                <td>30 €</td>
            </tr>
            <tr>
                <td>Bordeaux - Hôtel de Ville - Place Pey Berland</td>
                <td>Bordeaux Lac - Parc des Expositions</td>
                <td>30 min</td>
                <td>17,2 km</td>
                <td>Gamme ECO</td>
                <td>20 €</td>
            </tr>
            <tr>
                <td>Bordeaux Cité du Vin</td>
                <td>Château Margaux - Margaux-Cantenac</td>
                <td>35 min</td>
                <td>26,6 km</td>
                <td>Gamme VAN</td>
                <td>35 €</td>
            </tr>
            <tr>
                <td>Yvrac</td>
                <td>Bassin d'Arcachon</td>
                <td>1h15</td>
                <td>79,9 km</td>
                <td>Gamme VIP</td>
                <td>65 €</td>
            </tr>
        </table>
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
        <?php require '../../templates/form.php' ?>
    </div>
</section>
<?php require '../../templates/footer.php';?>

</body>
</html>
