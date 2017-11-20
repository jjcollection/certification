<?php
/* @var $this AbsensiController */
/* @var $model Absensi */

$this->breadcrumbs=array(
	'Absensi'=>array('index'),
	$model->idAbsensi=>array('view','id'=>$model->idAbsensi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Absensi', 'url'=>array('index')),
	array('label'=>'Create Absensi', 'url'=>array('create')),
	array('label'=>'View Absensi', 'url'=>array('view', 'id'=>$model->idAbsensi)),
	array('label'=>'Manage Absensi', 'url'=>array('admin')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>