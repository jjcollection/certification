<?php
/* @var $this NilaiMasterController */
/* @var $model NilaiMaster */

$this->breadcrumbs=array(
	'Nilai Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Tambah NilaiMaster', 'url'=>array('create')),
	array('label'=>'Kelola NilaiMaster', 'url'=>array('admin')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>