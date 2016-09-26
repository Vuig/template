<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
	<jdoc:include type="head" />
	<script src="/media/jui/js/bootstrap.min.js" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/media/jui/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/media/jui/css/bootstrap-responsive.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
</head>

<body>


<!-- NAVIGATION -->

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
<a class="brand" href="<?php echo $this->baseurl; ?>">TEST</a>
			<div class="nav-collapse collapse navbar-responsive-collapse">
<jdoc:include type="modules" name="head" style="none" />
			</div>
		</div>
	</div>
</div>


<!-- SLIDER -->

<div class="bigpic">
	<jdoc:include type="modules" name="top" style="xhtml" />
</div>


<div class="container">



 <?php 
    $columns == 0;
    if($this->countModules( 'right' )) {$columns++;}
    $centercolumnwidth = 100 - (33 * $columns);
    ?>
<div class="articles" style="width:<?php echo $centercolumnwidth ?>%">
<jdoc:include type="component"   />
</div>



<?php if ($this->countModules( 'right' )) : ?>
    <div class="sidebar" class="row-fluid">
        <jdoc:include type="modules" name="right" style="xhtml" />
    </div><!--/right1-->
    <div class="clearfix"></div>
    <?php endif; ?>


<div class="row-fluid">
<p align="center">&copy; <?php echo(JFactory::getApplication()->getCfg (‘sitename’));?> <?php echo date(‘Y’) ?></p>
</div>
</div>




</body>


</html>
