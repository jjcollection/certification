<?php
/* @var $this PelaksanaanController */
/* @var $model Pelaksanaan */

$this->breadcrumbs=array(
	'Pelaksanaan'=>array('index'),
	$model->idPelaksanaan=>array('view','id'=>$model->idPelaksanaan),
	'Update',
);

$this->menu=array(
	array('label' =>'Data Pelaksanaan', 'url'=>array('index')),
	array('label' => 'Tambah Pelaksanaan', 'url' => array('periodePelaksanaan/admin')),
	array('label' =>'Detil Pelaksanaan', 'url'=>array('view', 'id'=>$model->idPelaksanaan)),
	array('label' =>'Admin Pelaksanaan', 'url'=>array('admin')),
);


?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>