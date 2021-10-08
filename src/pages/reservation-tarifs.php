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

<div class="container-form1">
    <?php require '../../templates/form.php';?>
</div>
<?php require '../../templates/footer.php';?>

</body>
</html>
