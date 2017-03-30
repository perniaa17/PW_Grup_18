<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>Cool Blog</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-sacale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/coolblog.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/validator.js"></script>
</head>

<?php session_start(); ?>

<header>
  <div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Cool Blog</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <?php if(isset($_SESSION["newuser"])) : ?>
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
<?php echo $_SESSION["newuser"]; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="userpage.php">Els meus posts</a></li>
              </ul>
            </li>
            <li><a href="post.php">Nou Post</a></li>
            <form class="navbar-form navbar-left form_personalizado" method="post" action="index.php">
              <input class="btn btn-default input_personalizado" type="submit" name="exit"  value="Tanca sessió"/>
            </form>
          <?php else : ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="formulari.php">Registra't</a></li>
          <?php endif; ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>
</header>

<body>
  <div class="container">
    <br>
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-heading">Registre</div>
      <div class="panel-body">

          <form method="post" id="formulario" action="#">

            <div class="form-group">
              <label class="control-label" for="name">Username: </label><br />
              <div class="input-group">
                <span class="input-group-addon glyphicon glyphicon-user"></span>
                <input class="form-control" type="text" id="name" name="name" placeholder="username" autofocus required/><br />
              </div>
            </div>

            <div class="form-group">
              <label class="control-label" for="email">Email: </label><br />
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input class="form-control" type="email" id="email" name="email" placeholder="example@example.com" required/><br />
              </div>
            </div>

            <div class="form-group">
              <label class="control-label" for="date">Data naixement: </label><br />
              <div class="input-group">
                <span class="input-group-addon glyphicon glyphicon-hourglass"></span>
                <input class="form-control" type="date" id="date" name="date" required/><br />
              </div>
            </div>

            <div class="form-group">
              <label class="control-label" for="pass1">Contrasenya: </label><br />
              <div class="input-group">
                <span class="input-group-addon glyphicon glyphicon-eye-close"></span>
                <input class="form-control" type="password" id="pass1" name="pass1"placeholder="contrasenya" required/>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon glyphicon glyphicon-eye-close"></span>
                <input class="form-control" type="password" id="pass2" name="pass2" placeholder="repeteix contrasenya" required/><br />
              </div>
            </div>

            <button type="submit" class="btn btn-primary" id="enviar" >Enviar</button>

          </form>
        </div>
      </div>
      </div>
      <div class="col-md-4"></div>
    </div>
</body>
</html>




<?php
if(!empty($_POST)){


$aErrores = array();
$aMensajes = array();

//VALIDACIÓ USERNAME
if(preg_match("/^[a-zA-Z0-9\s]+$/", $_POST["name"])){
  if(strlen($_POST["name"]) >= 2 && strlen($_POST["name"]) <= 20){
    $name = $_POST["name"];
    $aMensajes[] = "Nom: $name";
  }else {
    $aErrores[] = "El username debe tener entre 2 y 20 caracteres.";
  }
}else{
  $aErrores[] = "El username solo admite caracteres alfanumericos.";
}


//VALIDACIÓ EMAIL
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $aErrores[] = "Invalid email format";
}else{
  $email = $_POST["email"];
  $aMensajes[] = "Email es: $email";
}

//VALIDACIÓ DATA NAIXEMENT
$dateAux = explode("-", $_POST["date"]);
if(checkdate($dateAux[1], $dateAux[2], $dateAux[0])){
  $date = $_POST["date"];
  $aMensajes[] = "Data naixement: $date";
}else {
  $aErrores[] = "Data invalida";
}

//VALIDACIÓ CONTRASENYA
$bool = true;
if(strlen($_POST["pass1"]) < 6 || strlen($_POST["pass1"]) > 12){
  $aErrores[] = "La clave debe tener entre 6 y 12 caracteres";
  $bool = false;
}
if (!preg_match('`[a-z]`',$_POST["pass1"])){
  $aErrores[] = "La clave debe tener al menos una letra minúscula";
  $bool = false;
}
if (!preg_match('`[A-Z]`',$_POST["pass1"])){
  $aErrores[] = "La clave debe tener al menos una letra mayúscula";
  $bool = false;
}
if (!preg_match('`[0-9]`',$_POST["pass1"])){
  $aErrores[] = "La clave debe tener al menos un caracter numérico";
  $bool = false;
}
if($bool == true){
  if($_POST["pass1"] !== $_POST["pass2"]){
    $aErrores[] = "Les contrasenyes son diferents.";
  }else{
  $pass = $_POST["pass1"];
  $aMensajes[] = "Contrasenya: $pass";
  }
}

// Si han habido errores se muestran, sino se muestran los mensajes
if( count($aErrores) > 0 ){
  echo "<p>ERRORS TROBATS:</p>";
  // Mostrar los errores:
  for( $contador=0; $contador < count($aErrores); $contador++ )
    echo $aErrores[$contador]."<br/>";
}else{
  echo "<p>LES TEVES DADES DE REGISTRE:</p>";

  for( $contador=0; $contador < count($aMensajes); $contador++ )
  echo $aMensajes[$contador]."<br/>";

  //AFEGIR DADES A LA BD
  $db = new PDO('mysql:host=localhost;dbname=coolblog', 'root');
  $stmt = $db->query("SELECT *  FROM coolblog");
  $row_count = $stmt->rowCount();
  $row_count++;
  $sql = "INSERT INTO coolblog
          (id, username, email, birthdate, password)
          VALUES
          ('$row_count','$name','$email','$date','$pass')";
  if ($db->query($sql)) {
    echo "Usuari afegit correctament.<br /><br />";
    //Cerrar conexión con la bd
    $db = null;
    header("Location: login.php");
  }
  else{
    echo "Nos s'ha pogut afegir l'usuari a la BD.<br /><br />";
  }
}

}
?>
