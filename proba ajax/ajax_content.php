<?php
$page = $_GET['p'];
$start = ($page-1)*10;

$bd = new PDO('mysql:host=localhost;dbname=comentarios', 'root');
$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$q = $bd->query('SELECT * FROM posts ORDER BY datetime DESC');
$num_rows = $q->rowCount();
$arr = array();
//////////////////////////////////////////////////////////
if($num_rows > 0){
	while($ComentarioItem = mysql_fetch_assoc($q)){
		$arr[] = array(
				"comentario_nombre" => $ComentarioItem['nombre'],
				"comentario_content" => $ComentarioItem['contenido']
		);
	}
	echo ''. json_encode($arr) .'';
}

?>
