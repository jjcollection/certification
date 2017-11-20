<?php
/* @var $this AbsensiController */
/* @var $model Absensi */

$this->breadcrumbs=array(
	'Absensis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Absensi', 'url'=>array('index')),
	array('label'=>'Manage Absensi', 'url'=>array('admin')),
);
?>

<h1>Create Absensi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>