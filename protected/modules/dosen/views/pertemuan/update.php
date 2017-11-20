<?php
/* @var $this PertemuanController */
/* @var $model Pertemuan */

$this->breadcrumbs=array(
	'Pertemuan'=>array('index'),
	$model->idPertemuan=>array('view','id'=>$model->idPertemuan),
	'Update',
);

$this->menu=array(
	array('label'=>'Tambah Pertemuan', 'url'=>array('create')),
	array('label'=>'Lihat Pertemuan', 'url'=>array('view', 'id'=>$model->idPertemuan)),
	array('label'=>'Kelola Pertemuan', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>