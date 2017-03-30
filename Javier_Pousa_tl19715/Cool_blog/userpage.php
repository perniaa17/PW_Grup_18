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


<?php
$db = new PDO('mysql:host=localhost;dbname=posts', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$statement = $db->query('SELECT * FROM posts ORDER BY datetime DESC');
$posts = $statement->fetchAll();
foreach ($posts as $key => $post) {
  if($post["username"] == $_SESSION["newuser"]){
?>

<body>
  <div class="container">
    <br>
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="row">
        <label class="control-label">Post date:
          <?php echo $post["datetime"];?>
        </label>
      </div>
      <div class="row">
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <label class="control-label">
              <?php echo $post["titol"];?>
            </label>
          </div>
          <div class="panel-body">
            <?php echo $post["content"]; ?> </label>
          </div>
        </div>
      </div>
      </div>
      <div class="col-md-2"></div>
    </div>
<?php
  }
}
?>
</body>

</html>
