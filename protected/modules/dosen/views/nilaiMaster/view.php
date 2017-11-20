<?php
/* @var $this NilaiMasterController */
/* @var $model NilaiMaster */

$this->breadcrumbs=array(
	'Nilai Masters'=>array('index'),
	$model->idPendaftaran0->idUser0->username,
);

$this->menu=array(
	array('label'=>'Ubah Nilai Master', 'url'=>array('update', 'id'=>$model->idNilaiMaster)),
	array('label'=>'Hapus Nilai Master', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idNilaiMaster),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Lihat Nilai Master', 'url'=>array('admin')),
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
		'nhuruf',
	),
)); ?>
