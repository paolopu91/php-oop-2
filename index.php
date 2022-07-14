<?php 
require_once "categories/products.php";
require_once "categories/giochi.php";
require_once "categories/cucce.php";



$Snack = new Products();
$CrocchetteCani = new Products();


$Snack->setName("Wolf of Wilderness - Orecchie di cervo Premium")->setPrezzo(10);
$CrocchetteCani->setName("Natural Trainer Sensitive Plus Adult Medium/Maxi con Cavallo, riso e olio")->setPrezzo(58);


var_dump($Snack);
var_dump($CrocchetteCani);

?>