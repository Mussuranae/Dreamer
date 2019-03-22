<?php
// define variables and set to empty values

$inputName = $inputCat = $inputPrice = $inputDescript1 = $inputDescript2 = $inputWarning = "";

$inputNameErr = $inputCatErr = $inputPriceErr = $inputDescript1Err = $inputDescript2Err = $inputWarningErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["inputName"])) {
    $inputNameErr = "Name is required";
  } else {
    $inputName = ($_POST["inputName"]);
    if (!preg_match("/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/",$inputName)) {
  $inputNameErr = "Only letters and white space allowed"; 
}
  }

  if (empty($_POST["inputDescript1"])) {
    $inputDescript1Err = "Description is required";
  } else {
    $inputDescript1 = ($_POST["inputDescript1"]);
    if (!preg_match("/^[a-zA-Z][a-zA-Z0-9-_\.]{1,300}$/",$inputDescript1)) {
  $inputDescript1Err = "Only letters and white space allowed"; 
}
  }



  if (empty($_POST["inputPrice"])) {
    $inputPriceErr = "Description is required";
  } else {
    $inputPrice = ($_POST["inputPrice"]);
    if (!preg_match("/\d+(\.\d{2})?/",$inputPrice)) {
  $inputPriceErr = "Respect the format"; 
}
  
}







}

  
