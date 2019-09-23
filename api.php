<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 23/09/2019
 * Time: 15:53
 */

$apiKey = 'dab8a9a7ce7b4eeea8174c4ccdb343b5';
$url = 'https://newsapi.org/v2/top-headlines';
$params = "country=us";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_COOKIESESSION, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Authorization: ' . $apiKey
));
$return = curl_exec($curl);
curl_close($curl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chaton</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<IMG class="c1" SRC="gif/coeur.gif">
<IMG class="c2" SRC="gif/coeur.gif">
<h1>Bienvenue</h1>
<div class="menul">
    <p><a href="#">Abyssin</a></p>
    <p><a href="#">Balinais </a></p>
    <p><a href="#">Bengal </a></p>
    <p><a href="#">Bleu Russe </a></p>
    <p><a href="#">Burmese </a></p>
    <p><a href="#">Chartreux </a></p>
    <p><a href="#">Chat bombay </a></p>
    <p><a href="#">Chausie </a></p>
    <p><a href="#">Korat </a></p>
    <p><a href="#">LaPerm </a></p>
    <p><a href="#">Lykoi </a></p>
    <p><a href="#">Mau égyptien </a></p>
    <p><a href="#">Ocicat </a></p>

    <h3>PUB</h3>
    <div class="pub">
        <img src="pub/boat.jpg">
        <img src="pub/car.jpg">
        <img src="pub/helico.jpg">
        <img src="pub/plane.jpg">
    </div>
</div>
<div class="maxmenu">
    <?php
    $myjson = json_decode($return);
    foreach ($myjson->articles as $key => $value) {
        ?>
        <h2><?php print_r($value->title) ?></h2>
        <h3><?php print_r($value->source->name) ?></h3>
        <h4><?php print_r($value->author) ?></h4>
        <p><?php print_r($value->description) ?></p>
        <a href="<?php print_r($value->url) ?>">URL</a><br><br>
        <img class="news" src="<?php print_r($value->urlToImage); ?>">
        <hr>
    <?php
    }
    ?>
</div>
<script type="text/javascript">
    var macouleur="red"
</script>
<script src="http://ekladata.com/anWiitTC4dg8SbPUXtuLYnmNK8s/pluie.js" type="text/javascript"></script>
</body>
</html>
