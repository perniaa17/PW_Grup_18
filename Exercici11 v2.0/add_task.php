<?php
if($_POST['taskToAdd'] != ""){

  $task= $_POST ['taskToAdd'];
  $date=date('ymd');

  //Valido caracters maliciosos
  if(!preg_match ("/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/",$task)){
    echo "S'han detectat caracters invàlids. Torna a escriure la tasca.";
  }else { //Si la tasca es correcta, la añado a la bd
    $db = new PDO('mysql:host=localhost;dbname=todolist2', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $statement = $db->prepare("INSERT INTO todolist2 (task, date, done) VALUES (:task, :date, 0)");
    $statement->bindParam(':task', $task, PDO::PARAM_STR);
    $statement->bindParam(':date', $date, PDO::PARAM_STR);
    if (!$statement) {
        print_r($db->errorInfo());
        exit;
    }
    if($statement->execute()){
      $db = null;
      header('Location: index.php');
    }else {
      echo "Error: Nos s'ha pogut afegir la tasca a la BD.";
    }
  }
}
?>
