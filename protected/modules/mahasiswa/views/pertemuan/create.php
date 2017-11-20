<?php
/* @var $this PertemuanController */
/* @var $model Pertemuan */

$this->breadcrumbs=array(
	'Pertemuans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pertemuan', 'url'=>array('index')),
	array('label'=>'Manage Pertemuan', 'url'=>array('admin')),
);
?>

<h1>Create Pertemuan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>