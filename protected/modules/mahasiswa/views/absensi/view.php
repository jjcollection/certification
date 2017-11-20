<?php
/* @var $this AbsensiController */
/* @var $model Absensi */

$this->breadcrumbs=array(
	'Absensis'=>array('index'),
	$model->idAbsensi,
);

$this->menu=array(
	array('label'=>'List Absensi', 'url'=>array('index')),
	array('label'=>'Create Absensi', 'url'=>array('create')),
	array('label'=>'Update Absensi', 'url'=>array('update', 'id'=>$model->idAbsensi)),
	array('label'=>'Delete Absensi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAbsensi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Absensi', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAbsensi',
		'idPelaksanaan',
		'nim',
		'statusKehadiran',
		'tglAbsen',
	),
)); ?>
