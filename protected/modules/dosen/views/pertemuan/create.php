<?php
/* @var $this PertemuanController */
/* @var $model Pertemuan */

$this->breadcrumbs=array(
	'Pertemuans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Pertemuan', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>