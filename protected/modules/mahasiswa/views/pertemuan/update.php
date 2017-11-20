<?php
/* @var $this PertemuanController */
/* @var $model Pertemuan */

$this->breadcrumbs=array(
	'Pertemuans'=>array('index'),
	$model->idPertemuan=>array('view','id'=>$model->idPertemuan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pertemuan', 'url'=>array('index')),
	array('label'=>'Create Pertemuan', 'url'=>array('create')),
	array('label'=>'View Pertemuan', 'url'=>array('view', 'id'=>$model->idPertemuan)),
	array('label'=>'Manage Pertemuan', 'url'=>array('admin')),
);
?>

<h1>Update Pertemuan <?php echo $model->idPertemuan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>