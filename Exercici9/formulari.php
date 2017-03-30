<?php
define("UPLOAD_DIR", __DIR__.'/uploads/');

if(!empty($_POST)){

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


if (!empty($_FILES["myFile"])){ //Valido que s'ha pujat un arxiu

  $myFile = $_FILES["myFile"]["name"];
  list($width, $height) = getimagesize($myFile); //Capturo mida en pixels
  $ext = pathinfo($myFile, PATHINFO_EXTENSION); //Capturo extensió de l'arxiu

  if ($_FILES["myFile"]["size"] < 1048576){ //Valido mida max de 1MB

    if($width <= "200" && $height <= "200"){ //Valido resolución max de 200x200px

      if($ext == 'gif' || $ext == 'png' || $ext == 'jpg' ){ //Valido extension .gif .png .jpg

        $myFile = $_FILES["myFile"];

        if ($myFile["error"] !== UPLOAD_ERR_OK){
            echo "<p>Error: La imatge de perfil no s'ha pujat a /Exercici9/uploads/</p>";
            exit;
        }

        //Asegura nombre de archivo correcto
        $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

        //Evitar sobreescribir un archivo existente
        $i = 0;
        $parts = pathinfo($name);
        while (file_exists(UPLOAD_DIR . $name)){
            $i++;
            $name = $parts["filename"] . "(" . $i . ")" . "." . $parts["extension"];
        }

        //Mover el archivo de /tmp a mi carpeta personal
        $success = move_uploaded_file($myFile["tmp_name"],
            UPLOAD_DIR . $name);
        if (!$success) {
            echo "<p>No s'ha pogut pujar l'arxiu.</p>";
            exit;
        }
        echo "<p>La teva foto de perfil s'ha pujat a la carpeta /Exercici9/uploads/ correctament.</p>";
      }else {
        echo "<p>Error: La imatge ha d'estar en format .gif, .png o .jpg</p>";
      }
    }else {
      echo "<p>Error: La resolució de la imatge ha de máxim 200x200 pixels.</p>";
    }
  }else{
    echo "<p>Error: La mida de la imatge ha de ser inferior a 1MB.</p>";
  }
}
?>
