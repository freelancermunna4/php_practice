<?php

$user = $_REQUEST["name"];
$pass = $_REQUEST["pass"];

// ---------------------encryption
$hash_formate = "$2y$07$";
$salt = "sfkdjfsk34ldj4434asjfkdfsdk";
$conCat = $hash_formate . $salt;

// -----------------------output
echo "Your User Name: ";
echo $user;
echo "<br>";
echo "Your Password: ";
echo $pass;
echo "<br>";
echo "Your Encrypted Password: ";
echo crypt($pass,$conCat);


?>