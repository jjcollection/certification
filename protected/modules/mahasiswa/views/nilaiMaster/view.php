<?php
/* @var $this NilaiMasterController */
/* @var $model NilaiMaster */

$this->breadcrumbs=array(
	'Nilai Masters'=>array('index'),
	$model->idPendaftaran0->idUser0->username,
);

$this->menu=array(
	array('label'=>'List NilaiMaster', 'url'=>array('index')),
	array('label'=>'Create NilaiMaster', 'url'=>array('create')),
	array('label'=>'Update NilaiMaster', 'url'=>array('update', 'id'=>$model->idNilaiMaster)),
	array('label'=>'Delete NilaiMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idNilaiMaster),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NilaiMaster', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tglPenilaian',
		'absensi',
		'tugas',
		'ujian',
		'na',
		'jml',
		'nhuruf',
	),
)); ?>
