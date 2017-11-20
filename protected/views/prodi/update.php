<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	$model->kodeProdi=>array('view','id'=>$model->kodeProdi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prodi', 'url'=>array('index')),
	array('label'=>'Create Prodi', 'url'=>array('create')),
	array('label'=>'View Prodi', 'url'=>array('view', 'id'=>$model->kodeProdi)),
	array('label'=>'Manage Prodi', 'url'=>array('admin')),
);
?>

<h1>Update Prodi <?php echo $model->kodeProdi; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>