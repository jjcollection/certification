<?php
/* @var $this ProfilDosenController */
/* @var $model ProfilDosen */

$this->breadcrumbs=array(
	'Profil Dosens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfilDosen', 'url'=>array('index')),
	array('label'=>'Manage ProfilDosen', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model,'modelUser'=>$modelUser)); ?>