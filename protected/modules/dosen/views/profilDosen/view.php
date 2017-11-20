<?php
/* @var $this ProfilDosenController */
/* @var $model ProfilDosen */

$this->breadcrumbs=array(
	'Profil Dosens'=>array('index'),
	$model->kodeDosen,
);

$this->menu=array(
	array('label'=>'List ProfilDosen', 'url'=>array('index')),
	array('label'=>'Update ProfilDosen', 'url'=>array('update', 'id'=>$model->kodeDosen)),
	array('label'=>'Delete ProfilDosen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kodeDosen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfilDosen', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kodeDosen',
		'namaDosen',
		'telp',
		'email',
		'alamat',
		'idUser',
	),
)); ?>
