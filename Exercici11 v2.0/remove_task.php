<?php
if($_POST['taskToRemove'] != ""){
  $id= $_POST['taskToRemove'];

  $db = new PDO('mysql:host=localhost;dbname=todolist2', 'root');
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $statement = $db->prepare("DELETE FROM todolist2 WHERE id = :id");
  $statement->bindParam(':id', $id, PDO::PARAM_INT);
  if (!$statement) {
      print_r($db->errorInfo());
      exit;
  }
  if($statement->execute()){
    $db = null;
    header('Location: index.php');
  }else {
    echo "Error: Nos s'ha pogut eliminar la tasca de la ToDoList.";
  }
}
?>
