<!DOCTYPE HTML>

<?php
if(!empty($_POST)){
  $email = $_POST["login"];
  $pass = $_POST["pass"];
  $db = new PDO('mysql:host=localhost;dbname=db_exercici12', 'root');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = $db->prepare("SELECT * FROM db_exercici12 WHERE email = :email");
  $sql->execute(array("email" => $email));
  $resultado = $sql->fetchAll();

  if ($sql->execute(array("email" => $email))) {
      foreach ($resultado as $row){
        if($row["password"] == $pass){
          echo "<p>LES TEVES DADES DE REGISTRE:</p>";
          echo "Nom: ".$row["name"]."<br />";
          echo "Cognom: ".$row["cognom"]."<br />";
          echo "Email: ".$row["email"]."<br />";
          echo "Contrasenya: ".$row["password"]."<br />";
          echo "Data naixement: ".$row["date"]."<br />";
          echo "DNI: ".$row["dni"]."<br />";
        }else{
          echo "Password incorrecte.";
        }
      }
  }else {
    echo "<p>Usuasi incorrecte</p>";
  }
  echo "<p>Usuari incorrecte</p>";
}
?>
