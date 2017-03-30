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

<body>
  <div class="container">
    <br>
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel-heading">Crea un nou post</div>
        <div class="panel-body">
          <div class="form-group">
            <form method="post" action="post.php" >
              <label class="control-label">Titol: </label><br />
              <input class="form-control" type="text" id="titol" name="titol" value="TITOL RANDOM" autofocus required /><br />
              <label class="control-label">Contingut del post: </label><br />
              <textarea class="form-control" id="content" name="content" rows="20" required />
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea><br />
              <input class="btn btn-primary" type="submit" id="guardar" name="guardar" value="Guardar i penjar a Cool Blog" />
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</body>
</html>


<?php
if(!empty($_POST)){
  if(empty($_POST["titol"]) || empty($_POST["content"])){
    echo "Has d'omplir tots els camps.";
  }else{
    $titol = $_POST["titol"];
    $content = $_POST["content"];
    $encodecontent = htmlentities($content);
    $username = $_SESSION["newuser"];
    $datetime = date('Y-m-d H:i:s');

    $db = new PDO('mysql:host=localhost;dbname=posts', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $statement = $db->query("SELECT id  FROM posts");
    $id = $statement->rowCount();
    $id++;

    $statement = $db->prepare("INSERT INTO posts (id, username, titol, content, datetime) VALUES(:id, :username, :titol, :content, :datetime)");
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->bindParam(':titol', $titol, PDO::PARAM_STR);
    $statement->bindParam(':content', $encodecontent, PDO::PARAM_STR);
    $statement->bindParam(':datetime', $datetime, PDO::PARAM_STR);
    if (!$statement) {
      print_r($db->errorInfo());
      exit;
    }
    if($statement->execute()){
          header('Location: index.php');
    }

  }
}

?>
