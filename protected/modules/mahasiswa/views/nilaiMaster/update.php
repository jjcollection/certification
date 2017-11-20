<?php
/* @var $this NilaiMasterController */
/* @var $model NilaiMaster */

$this->breadcrumbs=array(
	'Nilai Masters'=>array('index'),
	$model->idNilaiMaster=>array('view','id'=>$model->idNilaiMaster),
	'Update',
);

$this->menu=array(
	array('label'=>'Tambah NilaiMaster', 'url'=>array('create')),
	array('label'=>'Lihat NilaiMaster', 'url'=>array('view', 'id'=>$model->idNilaiMaster)),
	array('label'=>'Kelola NilaiMaster', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>