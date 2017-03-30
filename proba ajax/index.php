<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carga de contenido gradualmente</title>
<script type="application/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="application/javascript" src="custom.js"></script>

<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php

$bd = new PDO('mysql:host=localhost;dbname=comentarios', 'root');
$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$qr = $bd->query('SELECT * FROM comentarios');
$total_items = $qr->rowCount();
//$arr = array();
$qr = $bd->query("SELECT * FROM comentarios ORDER BY fecha DESC LIMIT 0, 10");

$i = 1;

?>
<ul id="list-items">
	<?php while( $ComentarioItem = mysql_fetch_array($q) ){?>
	<li id="item-<?php echo $i ?>">
    	<h2><?php echo $i ?></h2>
    	<span class="autor"><?php echo $ComentarioItem['nombre'] ?></span>
        <span class="contenido"><?php echo $ComentarioItem['contenido'] ?></span>
    </li>
    <?php
	$i++;
	} ?>
    <li id="more-items">
    	<a href="#" onclick="loadcontent(2,<?php echo $total_items ?>)" >Cargar mas ...</a>
    </li>
</ul>
</body>
</html>
