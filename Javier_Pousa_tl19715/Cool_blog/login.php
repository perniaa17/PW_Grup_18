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
              <input class="btn btn-default input_personalizado" type="submit" name="exit" value="Tanca sessió"/>
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

<body >
  <div class="container">
    <br>
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
          <div class="form-group">
            <form method="post" action="login.php" >
              <label class="control-label">Username o email: </label><br />
              <div class="input-group">
                <span class="input-group-addon glyphicon glyphicon-user"></span>
                <input class="form-control" type="text" id="username" name="username" placeholder="username o email" autofocus required />
              </div>
              <br />
              <label class="control-label">Password: </label><br />
              <div class="input-group">
                <span class="input-group-addon glyphicon glyphicon-eye-close"></span>
                <input class="form-control" type="password" id="pass" name="pass" placeholder="password" required /><br />
              </div>
              </br>
              <input class="btn btn-primary" type="submit" id="login" name="login" value="Login" />
            </form>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label" >Si no tens un username, tens que registrar-te: </label>
        <a href=formulari.php >Registre</a>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>
</body>
</html>


<?php
if(!empty($_POST)){
  if(empty($_POST["username"]) || empty($_POST["pass"])){
    echo "Has d'omplir tots els camps.";
  }else {
    $username = $_POST["username"];
    $pass = $_POST["pass"];

    $db = new PDO('mysql:host=localhost;dbname=coolblog', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $statement = $db->prepare("SELECT * FROM coolblog WHERE email = :email OR username = :username");
    $statement->bindParam(':email', $username, PDO::PARAM_INT);
    $statement->bindParam(':username', $username, PDO::PARAM_INT);
    if (!$statement) {
        print_r($db->errorInfo());
        exit;
    }
    $statement->execute();

    foreach ($statement as $row){
      if($row["password"] == $pass){

        if(!isset($_SESSION["newuser"])){
          $_SESSION["newuser"] = $row["username"];
          $newuser = $row["username"];
          setcookie("newuser", $newuser, time() +3600*24*7);
          header('Location: index.php');
        }else {
          echo "Tens que tancar la sessió actual per poder loguejar-te de nou";
        }
        //Cerrar conexión con la bd
        $db = null;
      }else {
        //Cerrar conexión con la bd
        $db = null;
        echo ("Password incorrecte.");
      }
    }

  }


}
?>
