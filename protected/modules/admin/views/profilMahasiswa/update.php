<?php
/* @var $this ProfilMahasiswaController */
/* @var $model ProfilMahasiswa */

$this->breadcrumbs=array(
	'Profil Mahasiswas'=>array('index'),
	$model->nim=>array('view','id'=>$model->nim),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfilMahasiswa', 'url'=>array('index')),
	array('label'=>'Create ProfilMahasiswa', 'url'=>array('create')),
	array('label'=>'View ProfilMahasiswa', 'url'=>array('view', 'id'=>$model->nim)),
	array('label'=>'Manage ProfilMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Update ProfilMahasiswa <?php echo $model->nim; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>