<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $pdo = new PDO(DSN, USER, PASS);
  $inputName = $_POST['inputName'];
  $inputCat = $_POST['inputCat'];
  $inputPrice = $_POST['inputPrice'];
  $inputDescript1 = $_POST['inputDescript1'];



$insert = 'INSERT INTO produits (inputCat, inputName, inputDescript1, inputPrice) VALUES (:inputCat, :inputName, :inputDescript1, :inputPrice);';
$prep = $pdo->prepare($insert);

$prep->bindValue(':inputCat', $inputCat, PDO::PARAM_STR);
$prep->bindValue(':inputName', $inputName, PDO::PARAM_STR);
$prep->bindValue(':inputDescript1', $inputDescript1, PDO::PARAM_STR);
$prep->bindValue(':inputPrice', $inputPrice, PDO::PARAM_STR);

$prep->execute();

}
