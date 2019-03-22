<?php
// define variables and set to empty values

$name = $password = "";

$nameErr = $passwordErr = "";

$userName = "admin";
$userPass = "Admin777";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = ($_POST["name"]);
    if (!preg_match("/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/",$name)) {
  $nameErr = "Only letters and numbers allowed"; 
}
  }

  if (empty($_POST["password"])) {
    $passwordErr = "A password is required";
  } else {
    $password = ($_POST["password"]);
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$password)) {
  $passwordErr = "UpperCase, LowerCase, Number/SpecialChar and min 8 Chars"; 
}
  }
  
}


  
