<!DOCTYPE HTML>
<html>
<form method="post" id="add_task" action="add_task.php">
Introdueix nova tasca:
<input type="text" name="taskToAdd" />
<input type="submit" id="btnAdd" name="btnAdd" value="Afegir" />

<?php
if($_POST['taskToAdd'] != ""){
  $file = __DIR__ ."/todolist.txt";
  $content = file_get_contents($file);
  $task= $_POST ['taskToAdd'];

  //Valido caracters maliciosos
  if(!preg_match ("/^[a-zA-Z\s]+$/",$task))
  {
      header('Location: index.html');
  }

  //Controlo si el .txt esta vacío
  if(empty($content)){
    $content .= $task;
  } else {
    $content .= "\n" . $task;
  }

  file_put_contents($file, $content);
  echo "Tasca afegida correctament.";
}else{
  echo "Nos has afegit cap tasca.";
}
?>

</form>
<br/>
<br/>
<form method="get" id="remove_task" action="remove_task.php">
Introdueix el nº de tasca completada:
<input type="number" name="taskToUpdate" />
<input type="submit" id="btnUpdate" name="btnUpdate" value="Actualitza" />
</form>
<br/>
<br/>
<form method="post" id="display_tasks" action="display_tasks.php">
Mostra les llistes todolist.txt y completed.txt  >
<input type="submit" id="btnDisplay" name="btnDisplay" value="Mostra!" />
</form>
</html>
