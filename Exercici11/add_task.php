<!DOCTYPE HTML>
<html>
<form method="post" id="add_task" action="add_task.php">
Introdueix nova tasca:
<input type="text" name="taskToAdd" />
<input type="submit" id="btnAdd" name="btnAdd" value="Afegir" />

<?php
//Inserto el codi php en aquesta després del botó Afegir per a poder
//inserir un misatge a continuació, un cop es faci clic al botó
if($_POST['taskToAdd'] != ""){

  $task= $_POST ['taskToAdd'];

  //Valido caracters maliciosos
  if(!preg_match ("/^[a-zA-Z\s]+$/",$task)){
    echo "S'han detectat caracters invàlids. Torna a escriure la tasca.";
  }else { //Si la tasca es correcta, la añado a la bd
    $db = new PDO('mysql:host=localhost;dbname=todolist', 'root');
    $stmt = $db->query("SELECT *  FROM todolist");
    $row_count = $stmt->rowCount();
    $row_count++;
    $done=false;
    $date=date('ymd');
    $sql = "INSERT INTO todolist (id, task, date, done) VALUES ('$row_count','$task','$date','$done')";
    if ($db->query($sql)) {
      echo "Tasca afegida correctament.";
    }
    else{
      echo "Nos s'ha pogut afegir la tasca a la BD.";
    }
    //Cerrar conexión con la bd
    $db = null;
  }
}else{
  echo "Nos has afegit cap tasca.";
}
?>


</form>
<br/>
<br/>
<form method="post" id="remove_task" action="remove_task.php">
Introdueix el nº de tasca completada:
<input type="number" name="taskToUpdate" />
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
