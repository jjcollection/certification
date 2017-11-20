<?php
/* @var $this PelaksanaanController */
/* @var $model Pelaksanaan */

$this->breadcrumbs=array(
	'Pelaksanaan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pelaksanaan', 'url'=>array('index')),
	array('label'=>'Admin Pelaksanaan', 'url'=>array('admin')),
);
?>

<?php  $this->renderPartial('_form', array('model'=>$model)); ?>