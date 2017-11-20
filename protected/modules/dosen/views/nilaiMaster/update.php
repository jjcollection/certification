<?php
/* @var $this NilaiMasterController */
/* @var $model NilaiMaster */

$this->breadcrumbs=array(
	'Nilai Masters'=>array('index'),
	$model->idNilaiMaster=>array('view','id'=>$model->idNilaiMaster),
	'Update',
);

$this->menu=array(
	array('label'=>'Lihat Nilai Master', 'url'=>array('view', 'id'=>$model->idNilaiMaster)),
	array('label'=>'Kelola Nilai Master', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>