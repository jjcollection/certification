<?php
/* @var $this ProfilMahasiswaController */
/* @var $model ProfilMahasiswa */

$this->breadcrumbs=array(
	'Profil Mahasiswas'=>array('index'),
	$model->nim,
);

$this->menu=array(
	array('label'=>'List ProfilMahasiswa', 'url'=>array('index')),
	array('label'=>'Create ProfilMahasiswa', 'url'=>array('create')),
	array('label'=>'Update ProfilMahasiswa', 'url'=>array('update', 'id'=>$model->nim)),
	array('label'=>'Delete ProfilMahasiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nim),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfilMahasiswa', 'url'=>array('admin')),
);
?>

<h1>View ProfilMahasiswa #<?php echo $model->nim; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nim',
		'nama',
		'tlp',
		'kodeProdi',
		'idUser',
	),
)); ?>
