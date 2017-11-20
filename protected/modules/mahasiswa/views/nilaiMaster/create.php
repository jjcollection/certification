<?php
/* @var $this NilaiMasterController */
/* @var $model NilaiMaster */

$this->breadcrumbs=array(
	'Nilai Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NilaiMaster', 'url'=>array('index')),
	array('label'=>'Manage NilaiMaster', 'url'=>array('admin')),
);
?>

<h1>Create NilaiMaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>