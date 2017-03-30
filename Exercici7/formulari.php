<?php
if(!empty($_POST)){

  //Obtengo datos del POST
  $nom=$_POST["nom"];
  $email=$_POST["email"];
  $edat=(int)$_POST["edat"];

  //Valido longitud nombre
  if(strlen($nom)>=1 && strlen($nom)<=20){
    echo "Nom: ".$_POST["nom"].'<br/>';
  }else {
    header("Location: index.html");
  }

  //Valido correo válido
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email: ".$_POST["email"].'<br/>';
  }else {
    header("Location: index.html");
  }

  //Valido edad correcta
  if($edat>=1 && $edat<=120){
    echo "Edat: ".$_POST["edat"]." anys".'<br/>';
  }else{
    header("Location: index.html");
  }
}
?>
