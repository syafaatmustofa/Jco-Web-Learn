<?php

// $db = new PDO("mysql:host=localhost;dbname=apidasar","root", "");
// $query = $db->prepare("SELECT * FROM hero");

// $query->execute();
// $data = $query->fetchAll(PDO::FETCH_ASSOC);
// $data = json_encode($data);

// echo $data;

$text = file_get_contents('hero.json');
$hero = json_decode($text, true);
echo $hero[0]['counterhero']['hero2'];

// var_dump(json_decode($text)) 
?>