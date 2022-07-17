<?php 
require_once "categories/products.php";
require_once "categories/giochi.php";
require_once "categories/cucce.php";
require_once "UserPayment.php";
require_once "user.php";

// added snack and food for dog
$Snack = new Products("Wolf of Wilderness - Orecchie di cervo Premium",10);
$CrocchetteCani = new Products("Natural Trainer Sensitive Plus Adult Medium/Maxi con Cavallo, riso e olio",58);

// added dogtoys
$DogToy1 = new Giochi("Kong",10,"Il Kong per cani è dunque un gioco di masticazione: esso aiuta i cuccioli ad apprendere il giusto modo di masticare, grazie alla sua gomma resistente","Gomma dura masticabile");
$DogToy2 = new Giochi("Trixie Doppia Corda",5,"Trixie doppia corda gioco per cani in cotone con 3 nodi, per tira e molla, con passante per mano, pulisce i denti e gli spazi interdentali, per giochi prolungati","Cotone");

// added dog kennel
$DogKennel = new Cucce("Mini: L 72 x P 41 x H 51 cm","Trasportino per auto Ferplast Atlas Car",59,"Trasportino per auto Ferplast Atlas Car per il trasporto sicuro del cane, con porta rimovibile con griglia per un facile accesso, maniglie e tappetino igienico");

// added user
$user= new User("Paolo Pugliese","paolo.pugliese@gmail.com",true);
$user2= new User("Matteo Bianchi","matteo.bianchi@gmail.com",true);


// Added cart
$user->setCart($Snack);

$user2->setCart($CrocchetteCani);


// added paymentMethod
$user->setUserPaymentMethod(new UserPayment("14264068",10-22));
$user2->setUserPaymentMethod(new UserPayment("59000045643", 4-30));




// var_dump($Snack);
// var_dump($CrocchetteCani);

// var_dump($DogToy1);
// var_dump($DogToy2);

// var_dump($DogKennel);

var_dump($user);

var_dump("____________________________________________________________________________________________________");

var_dump($user2);




?>