<?php

$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL,'https://restcountries.com/v2/name/Brazil');
curl_setopt($ch, CURLOPT_URL,'https://restcountries.com/v3.1/all');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$response = curl_exec($ch);
//var_dump($response);

if (curl_errno($ch)) echo curl_error($ch);
else $decoded = json_decode($response, true);
//var_dump($decoded);
$pais = $decoded[20];
$nombre = $pais["name"]["official"];
$capital = $pais["capital"]["0"];
$poblacion = $pais["population"];
$area = $pais["area"];
$moneda = $pais["currencies"]["PEN"]["name"];
$idioma = $pais["languages"]["spa"];

echo "Nombre del pais: $nombre <br>";
echo "Capital de $nombre: $capital <br>";
echo "Poblacion de $nombre: $poblacion <br>";
echo "Area de $nombre: $area <br>";
echo "Moneda de $nombre: $moneda <br>";
echo "Idioma de $nombre: $idioma <br>";

curl_close($ch);

?>