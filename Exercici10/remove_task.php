<!DOCTYPE HTML>
<html>
<form method="post" id="add_task" action="add_task.php">
Introdueix nova tasca:
<input type="text" name="taskToAdd" />
<input type="submit" id="btnAdd" name="btnAdd" value="Afegir" />
</form>
<br/>
<br/>
<form method="get" id="remove_task" action="remove_task.php">
Introdueix el nº de tasca completada:
<input type="number" name="taskToUpdate" />
<input type="submit" id="btnUpdate" name="btnUpdate" value="Actualitza" />

<?php
if($_GET['taskToUpdate'] != ""){
  $num= $_GET ['taskToUpdate'];
  $file = file_get_contents(__DIR__ ."/todolist.txt");
  $tasks = explode("\n", $file);

  foreach ($tasks as $key => $task) {
    if ($key == $num){

      $file2 = file_get_contents(__DIR__ ."/completed.txt");

      //Controlo si el .txt esta vacío
      if(empty($file2)){
        $file2 .= $task;
      } else {
        $file2 .= "\n" . $task;
      }
      file_put_contents(__DIR__ ."/completed.txt", $file2);
      echo "Tasca actualitzada correctament.";

      unset($tasks[$key]);
    }
  }
  $tasksaux = implode("\n", $tasks);
  file_put_contents(__DIR__ ."/todolist.txt", $tasksaux);
} else {
  echo "Nos has afegit cap nº de tasca completada.";
}
?>

</form>
<br/>
<br/>
<form method="post" id="display_tasks" action="display_tasks.php">
Mostra les llistes todolist.txt y completed.txt  >
<input type="submit" id="btnDisplay" name="btnDisplay" value="Mostra!" />
</form>
</html>
