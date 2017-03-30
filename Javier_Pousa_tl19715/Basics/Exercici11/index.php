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
Introdueix tasca completada:
<input type="number" name="taskToRemove" />
<input type="submit" id="btnUpdate" name="btnUpdate" value="Actualitza" />
</form>
</html>


<?php
//Afegeixo al final del codi html el script php que permit mostrar les dades de las BD

//Codigo para obtener todas las tasks de todolist
$con = new PDO('mysql:host=localhost;dbname=todolist', 'root');

//Titutlo de la lista todolist.txt
echo "<br/><br/><b><u>TO DO List: </u></b><br/>";

//Printo las tareas tachadas segun atributo done=0 o done=1
$sentencia = $con->query("SELECT *  FROM todolist");
foreach ($sentencia as $row) {
  if($row["done"] == 0){
    echo "nº ".$row["id"]." ".$row["task"]."<br />";
  } else {
    echo "nº ".$row["id"]." <del>".$row["task"]."</del><br />";
  }
}
//Cerrar conexión con la bd
$con = null;
?>
