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
    <?php echo Asset::css('main.css'); ?>

</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
    <a class="brand" href="welcome/index"><?php echo Asset::img('Logo.jpg'); ?></a>
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active"><a href="welcome/index"><i class=""></i> Home</a></li>
          <li><?php echo Html::anchor('about', 'About'); ?></li>
          <li><?php echo Html::anchor('contact', 'Contact'); ?></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><?php echo Html::anchor('services/consulting', 'IT Consulting'); ?></li>
              <li><?php echo Html::anchor('services/repair', 'Computer Repair'); ?></li>
              <li><?php echo Html::anchor('services/networking', 'Networking'); ?></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
  </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->

	<div class="container">
        <h1><?php echo $title; ?></h1>

        <div class="">
			<?php echo $content; ?>
        </div>
    </div>
</body>
</html>