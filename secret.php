<?php

session_start();

$true_MDP = "kangourou";
$user_MDP = htmlspecialchars( $_POST['passe']);


if($true_MDP === $user_MDP){

  echo 'bravo! le code secret de lancement de la fusée est H8DK2DDR2';
}else{
  echo 'Dommage, tu ne possèdes pas le bon mot de passe';
}



 ?>
