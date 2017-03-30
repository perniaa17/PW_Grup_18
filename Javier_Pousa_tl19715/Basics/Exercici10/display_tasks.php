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
</form>
<br/>
<br/>
<form method="post" id="display_tasks" action="display_tasks.php">
Mostra les llistes todolist.txt y completed.txt  >
<input type="submit" id="btnDisplay" name="btnDisplay" value="Mostra!" />
</form>
</html>

<?php

$file = __DIR__ ."/todolist.txt";
$content = file_get_contents($file);
$tasks = explode("\n", $content);
echo "<br/><br/><b><u>TO DO List: </u></b><br/>";
foreach ($tasks as $key => $task) {
  echo nl2br("nº $key - $task \n");
}
$file2 = __DIR__ ."/completed.txt";
$content2 = file_get_contents($file2);
$tasks2 = explode("\n", $content2);
echo "<br/><br/><b><u>Tasques completades: </u></b><br/>";
foreach ($tasks2 as $key => $task) {
  echo nl2br("X $task \n");
}
?>
