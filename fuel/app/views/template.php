<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<?php echo Asset::css('bootstrap-responsive.min.css'); ?>
    <?php echo Asset::css('bootstrap.min.css'); ?>
    <?php echo Asset::js('bootstrap.min.js'); ?>

</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="logo-text brand" href="#">Mike's Ctrl Alt Del</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">IT Consulting</a></li>
              <li><a href="#">Computer Repair</a></li>
              <li><a href="#">Networking</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
  </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->

	<div class="container">
        <h1><?php echo $title; ?></h1>

        <?php echo $content; ?>
    </div>
</body>
</html>