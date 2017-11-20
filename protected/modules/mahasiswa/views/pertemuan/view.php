<?php
/* @var $this PertemuanController */
/* @var $model Pertemuan */

$this->breadcrumbs=array(
	'Pertemuans'=>array('index'),
	$model->idPertemuan,
);

$this->menu=array(
	array('label'=>'List Pertemuan', 'url'=>array('index')),
	array('label'=>'Create Pertemuan', 'url'=>array('create')),
	array('label'=>'Update Pertemuan', 'url'=>array('update', 'id'=>$model->idPertemuan)),
	array('label'=>'Delete Pertemuan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPertemuan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pertemuan', 'url'=>array('admin')),
);
?>

<h1>View Pertemuan #<?php echo $model->idPertemuan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPertemuan',
		'idPelaksanaan',
		'tanggal',
		'waktu',
		'materi',
	),
)); ?>
