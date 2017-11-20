<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<?php
	$assetsDir=Yii::getPathOfAlias('ext.heart.views.css');
	$assets=Yii::app()->assetManager->publish($assetsDir);
	$cs=Yii::app()->clientScript;
	$cs->registerCssFile($assets.'/main.css');
	?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php



?>

<div class="container" id="page">
	<?php 
	if(isset($this->breadcrumbs)){
		$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		    'links'=>$this->breadcrumbs,
		));
	}	
	?>
	<?php echo $content; ?>
	<div class="clearfix"></div>
</div><!-- page -->

<?php
$this->widget('bootstrap.widgets.TbNavbar', array(
	'brand' => '<small>Copyright &copy; 2014 by Hafid Mukhlasin. All Rights Reserved</small>',
	'fixed' => 'bottom',
	'type' => 'inverse',
));
?>
</body>
</html>
