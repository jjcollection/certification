<?php
/* @var $this ProfilDosenController */
/* @var $model ProfilDosen */

$this->breadcrumbs=array(
	'Profil Dosens'=>array('index'),
	$model->kodeDosen=>array('view','id'=>$model->kodeDosen),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfilDosen', 'url'=>array('index')),
	array('label'=>'Create ProfilDosen', 'url'=>array('create')),
	array('label'=>'View ProfilDosen', 'url'=>array('view', 'id'=>$model->kodeDosen)),
	array('label'=>'Manage ProfilDosen', 'url'=>array('admin')),
);
?>

<h1>Update ProfilDosen <?php echo $model->kodeDosen; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'modelUser'=>$modelUser)); ?>