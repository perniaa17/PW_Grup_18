<?php
if(!empty($_POST)){

  //Obtengo datos del POST
  $nom=$_POST["nom"];
  $email=$_POST["email"];
  $edat=(int)$_POST["edat"];

  if(strlen($nom)>=1 && strlen($nom)<=20){   //Valido longitud nombre
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){   //Valido correo válido
      if($edat>=1 && $edat<=120){   //Valido edad correcta
            echo "Nom: $nom".'<br/>';
            echo "Email: $email".'<br/>';
            echo "Edat: $edat".'<br/>';
      }else {
        echo "La edat ha de ser entre 1-120.<br/>
              Torna a introduïr correctament les dades<br/><br/>";
      }
    }else {
      echo "L'email ha de ser una adreça vàlida.<br/>
            Torna a introduïr correctament les dades:<br/><br/>";
    }
  }else {
    echo "El nom ha de tenir entre 1-20 caracteres.<br/>
          Torna a introduïr correctament les dades:<br/><br/>";
  }
  echo "<br/><br/><br/><br/><br/>";
  echo "Nota: Fent servir AJAX amb jQuery podem enviar per POST les dades al formulari.php y obtenir una resposta al nevegador sense necessitat de refrescar-lo.";
}
?>
