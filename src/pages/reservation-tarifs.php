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
<?php/* var_dump($runsPrestationsDetails);die */?>

<h1>Réservation et tarifs</h1>

<h2>Nos gammes de transports</h2>

<h3>Prestations incluses</h3>

<h3>Prestations supplémentaires</h3>

<h2>Exemples de trajets</h2>

<?php
    require '../../templates/form.php';
    require '../../templates/footer.php';
?>

</body>
</html>
