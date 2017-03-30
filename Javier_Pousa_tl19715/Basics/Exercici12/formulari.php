<!DOCTYPE HTML>
<html>
<h1>Register page:</h1>

<form method="post" action="formulari.php" autocomplete="on">
Nom i Cognom:
<input type="text" name="name" placeholder="Virgen" autofocus />
<input type="text" name="cognom" placeholder="Del Camino Seco"  />
<br /><br />
Correu electrònic:
<input type="email" name="email" placeholder="example@example.com" />
<br /><br />
Contrasenya:
<input type="password" name="pass1" placeholder="********"  />
Repeteix contrasenya:
<input type="password" name="pass2" placeholder="********"  />
<br /><br />
Data de naixement:
<input type="date" name="data"  />
<br /><br />
DNI:
<input type="text" name="dni" placeholder="formato: 12345678X"  />
<br /><br />
Acceptar termes i condicions:
<input type="checkbox" name="check" value="1" />
<br /><br /><br />
<input type="submit" name="btnRegistre" value="Registre"  />
</form>
<br /><br /><br /><br />
</html>





<?php

if(!empty($_POST)){

//La validació que de que s'omplin tots els camps es fa des del html,
//amb el parametre "required" a cada <input type="xxxx" required />
$aErrores = array();
$aMensajes = array();

// Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
 $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

//VALIDACIÓ NOM
if(preg_match($patron_texto, $_POST["name"])){
  $name = $_POST["name"];
  $aMensajes[] = "Nom: $name";
}else{
  $aErrores[] = "El nom conté caracters invàlids.";
}

// VALIDACIÓ COGNOM
if(preg_match($patron_texto, $_POST["cognom"])){
  $cognom = $_POST["cognom"];
  $aMensajes[] = "Cognom/s: $cognom";
}else{
  $aErrores[] = "El cognom/s conté caracters invàlids.";
}

//VALIDACIÓ EMAIL
//El email es valida al client amb html (més facil)
$email = $_POST["email"];
$aMensajes[] = "Email es: $email";

//VALIDACIÓ CONTRASENYA
$bool = true;
if(strlen($_POST["pass1"]) < 6){
  $aErrores[] = "La clave debe tener al menos 6 caracteres";
  $bool = false;
}
if (!preg_match('`[a-z]`',$_POST["pass1"])){
  $aErrores[] = "La clave debe tener al menos una letra minúscula";
  $bool = false;
}
if (!preg_match('`[A-Z]`',$_POST["pass1"])){
  $aErrores[] = "La clave debe tener al menos una letra mayúscula";
  $bool = false;
}
if (!preg_match('`[0-9]`',$_POST["pass1"])){
  $aErrores[] = "La clave debe tener al menos un caracter numérico";
  $bool = false;
}
if (!preg_match('`[\!\@#$%\?&\*\(\)_\-\+=]`',$_POST["pass1"])){
  $aErrores[] = "La clave debe tener al menos un caracter especial";
  $bool = false;
}

if($bool == true){
  if($_POST["pass1"] !== $_POST["pass2"]){
    $aErrores[] = "Les contrasenyes son diferents.";
  }else{
  $pass = $_POST["pass1"];
  $aMensajes[] = "Contrasenya: $pass";
  }
}

//VALIDACIÓ DATA
//La data es valida al client amb html (més facil)
//A més a més, ja en bé donada en format ISO 8601
$data = $_POST["data"];
$aMensajes[] = "Data naixement: $data";

//VALIDACIÓ DNI
$dni_letra = substr($_POST["dni"], -1);
$dni_nums = substr($_POST["dni"], 0, -1);
if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $dni_nums%23, 1) == $dni_letra
    && strlen($dni_letra) == 1
    && strlen ($dni_nums) == 8 )
{
  $dni = $_POST["dni"];
  $aMensajes[] = "DNI: $dni";
}else{
  $aErrores[] = "El DNI no es vàlid.";
}

//VALIDACIÓ ACCEPTAR CONDICIONS
if (isset($_POST['check']) && $_POST['check'] == "1"){
  $check = true;
  $aMensajes[] = "Has acceptat les condicions.";
}else {
  $aErrores[] = "Has d'acceptar les condicions.";
}


// Si han habido errores se muestran, sino se mostrán los mensajes
if( count($aErrores) > 0 ){
  echo "<p>ERRORS TROBATS:</p>";
  // Mostrar los errores:
  for( $contador=0; $contador < count($aErrores); $contador++ )
    echo $aErrores[$contador]."<br/>";
}else{
  //AFEGIR DADES A LA BD
  $db = new PDO('mysql:host=localhost;dbname=db_exercici12', 'root');
  $stmt = $db->query("SELECT *  FROM db_exercici12");
  $sql = "INSERT INTO db_exercici12
          (name, cognom, email, password, date, dni)
          VALUES
          ('$name','$cognom','$email','$pass','$data','$dni')";
  if ($db->query($sql)) {
    echo "Usuari afegit correctament.<br /><br />";
  }
  else{
    echo "Nos s'ha pogut afegir l'usuari a la BD.<br /><br />";
  }
  //Cerrar conexión con la bd
  $db = null;

  // Mostrar los mensajes:
  echo "<p>LES TEVES DADES DE REGISTRE:</p>";
  
  for( $contador=0; $contador < count($aMensajes); $contador++ )
  echo $aMensajes[$contador]."<br/>";

}




}
 ?>
