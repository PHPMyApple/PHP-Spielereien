<?php
//header("Content-Type: text/json; charset=UTF-8");



echo "<h3>Beispiel json_encode</h3>";

$cart = array(
  "ID" => 12345,
  "Name" => "Leon",
  "Email" => "phpmyapple@test.de",
  "contents" => array(
    array(
      "ProduktID" => 100,
      "ProduktName" => "Erstes",
      "quantity" => 1
    ),
    array(
      "ProduktID" => 101,
      "ProduktName" => "Zweites",
      "quantity" => 2
    )
  ),
  "Completed" => true
);
  
echo json_encode($cart);



echo "<h3>Beispiel json_decode</h3>";

$json='{"name":"Pullover",
        "Preis":1500,
        "Beschreibung":{
          "Größe":["S","M","L","XL"],
          "Farbe":["Rot","Grau","Blau"]}}';
$Item = json_decode($json, true);

echo "name = ".$Item['name'];
echo "<br/>price = ".$Item['Preis'];
echo "<br/>desription size = ".$Item['Beschreibung']['Größe'][1];
echo "<br/>description color = ".$Item['Beschreibung']['Farbe'][1];
?>
