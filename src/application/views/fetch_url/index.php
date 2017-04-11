<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>fetch url</title>

    <!-- Bootstrap -->
    <link href="<?php echo(base_url()); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo(base_url()); ?>css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
body {
  padding-top: 50px;
}
#main {
  padding: 40px 15px;
}
  </style>
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">fetch url test</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">main</a></li>
<!--
            <li><a href="<?php echo(site_url()); ?>/fish_market_db/maintain">資料維護</a></li>
-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div id="main">
<form>
  <div class="form-group">
    <label for="txtUrl">url</label>
    <input type="text" class="form-control" id="txt_url" placeholder="https://">
  </div>
  <button type="submit" id="btn_submit" class="btn btn-default">送出</button>
</form>
<div>
    <label>結果</label>
<div id="result"></div>
</div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo(base_url()); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo(base_url()); ?>js/main.js"></script>
  </body>
</html>