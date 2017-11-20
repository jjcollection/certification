<?php
/* @var $this KeahlianController */
/* @var $model Keahlian */

$this->breadcrumbs=array(
	'Keahlians'=>array('index'),
	$model->idKeahlian,
);

$this->menu=array(
	array('label'=>'Tambah Keahlian', 'url'=>array('create')),
	array('label'=>'Ubah Keahlian', 'url'=>array('update', 'id'=>$model->idKeahlian)),
	array('label'=>'Hapus Keahlian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idKeahlian),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Keahlian', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idKeahlian',
		'namaKeahlian',
	),
)); ?>
