<?php
/* @var $this PeriodeController */
/* @var $model Periode */

$this->breadcrumbs=array(
	'Periode'=>array('index'),
	$model->idPeriodePelaksanaan=>array('view','id'=>$model->idPeriodePelaksanaan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Periode', 'url'=>array('index')),
	array('label'=>'Create Periode', 'url'=>array('create')),
	array('label'=>'View Periode', 'url'=>array('view', 'id'=>$model->idPeriodePelaksanaan)),
	array('label'=>'Manage Periode', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>