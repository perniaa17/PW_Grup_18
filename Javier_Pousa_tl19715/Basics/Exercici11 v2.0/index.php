<?php
$db = new PDO("mysql:host=localhost;dbname=todolist2", "root");
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$statement = $db->query("SELECT * FROM todolist2 ORDER BY id ASC");
$tasks = $statement->fetchAll();
?>

<!DOCTYPE HTML>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercici 11 v2.0</title>
</head>

<body>
  <form method="post" id="add_task" action="add_task.php">
  Introdueix nova tasca:
  <input type="text" name="taskToAdd" />
  <input type="submit" id="btnAdd" name="btnAdd" value="Afegir" />
  </form>
  <br/>
  <br/>
  <form method="post" id="complete_task" action="complete_task.php">
  Introdueix tasca completada:
  <input type="number" name="taskToComplete" />
  <input type="submit" id="btnUpdate" name="btnUpdate" value="Actualitza" />
  </form>
  <br/>
  <br/>
  <form method="post" id="remove_task" action="remove_task.php">
  Introdueix tasca a eliminar:
  <input type="number" name="taskToRemove" />
  <input type="submit" id="btnElimina" name="btnElimina" value="Elimina" />
  </form>
  <br />
  <br />
  <b><u>TO DO List: </u></b><br/>

  <?php
  //Printo la lista de tasks
  foreach ($tasks as $key => $task) {
    if($task["done"] == 0){
      echo "nº ".$task["id"]." ".$task["task"]."<br />";
    }else {
      echo "nº ".$task["id"]." <del>".$task["task"]."</del><br />";
    }
  } //end foreach
  $db = null; //Cierro conexion con db
  ?>

</body>
</html>
