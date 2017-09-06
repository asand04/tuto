<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Phalcon PHP Framework</title>
        <link rel="stylesheet" href="<?= $this->url->getBaseURI ();?>public/vendor/dist/css/bootstrap.min.css">
    </head>
    <body>
    <nav  class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Tutoriel</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index/dashboard">Dashboard</a></li>
              <li><a href="index">Inscription</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
        <div class="container">
            <?= $this->getContent() ?>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?= $this->url->getBaseURI ();?>public/vendor/dist/js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="<?= $this->url->getBaseURI ();?>public/vendor/dist/js/bootstrap.min.js"></script>
    </body>
</html>
