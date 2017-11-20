<?php
/* @var $this KeahlianController */
/* @var $model Keahlian */

$this->breadcrumbs=array(
	'Keahlians'=>array('index'),
	$model->idKeahlian=>array('view','id'=>$model->idKeahlian),
	'Update',
);

$this->menu=array(
	array('label'=>'Tambah Keahlian', 'url'=>array('create')),
	array('label'=>'Lihat Keahlian', 'url'=>array('view', 'id'=>$model->idKeahlian)),
	array('label'=>'Kelola Keahlian', 'url'=>array('admin')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>