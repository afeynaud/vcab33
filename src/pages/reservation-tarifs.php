<!DOCTYPE html>

<html lang='fr'>

<head>
    <link rel='stylesheet' href='../../css/style.css'>
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
          <img class="card" src="https://picsum.photos/id/1003/300" alt="Sample photo">
          <div class="text">
            <h3>GAMME ECO</h3>
            <p>Voyagez à bord d’une berline économique 2 places vous procurant tout le confort nécessaire pour profiter au mieux de votre trajet.</p>        
          </div>
        </article>
        <article class="card">
          <img class="card" src="https://picsum.photos/id/1003/300" alt="Sample photo">
          <div class="text">
            <h3>GAMME VIP</h3>
            <p>Avec l’offre VIP, nous vous transportons dans un véhicule haut de gamme avec vitres teintées. Le service à bord est personnalisé selon vos exigences et votre conducteur habilité à assurer votre sécurité.</p>           
          </div>
        </article>
        <article class="card">
          <img class="card" src="https://picsum.photos/id/1003/300" alt="Sample photo">
          <div class="text">
            <h3>GAMME VAN</h3>
            <p>Notre gamme VAN est spécialement adaptée au transport de groupe. Nous vous garantissons bien évidemment un service à la hauteur de notre réputation.</p>
          </div>
        </article>
      </main>
      <main class="product">
        <div class="presta">
          <h2>Prestations incluses</h2>
        </div>
          <div class="container">
            <div class="card-icons-blocks"><i class="fas fa-tint fa-3x card-circle-icon"></i></div>
            <div class="card-icons-blocks"><i class="fas fa-wifi fa-3x card-circle-icon"></i></div>
            <div class="card-icons-blocks"><i class="fas fa-battery-full fa-3x card-circle-icon"></i></div>
          </div>
      </main>

<h2>Nos gammes de transports</h2>

<h3>Prestations incluses</h3>

<h3>Prestations supplémentaires</h3>

<h2>Exemples de trajets</h2>

<div class="container-form1">
    <?php require '../../templates/form.php';?>
</div>
<?php require '../../templates/footer.php';?>

</body>
</html>
