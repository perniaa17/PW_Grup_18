<!DOCTYPE HTML>

<?php
if(!empty($_POST)){
  $email = $_POST["login"];
  $pass = $_POST["pass"];
  $db = new PDO('mysql:host=localhost;dbname=db_exercici12', 'root');
  $sql = "SELECT * FROM db_exercici12";
  $sentencia = $db->query($sql);
  if ($db->query($sql)) {
      echo "<p>LES TEVES DADES DE REGISTRE:</p>";
      foreach ($sentencia as $rows){
          echo "Nom: ".$rows["name"]."<br />";
          echo "Cognom: ".$rows["cognom"]."<br />";
          echo "Email: ".$rows["email"]."<br />";
          echo "Contrasenya: ".$rows["password"]."<br />";
          echo "Data naixement: ".$rows["date"]."<br />";
          echo "DNI: ".$rows["dni"]."<br />";
      }
  }else {
    echo "<p>Usuasi i/o password incorrecte</p>";
  }
}
?>
