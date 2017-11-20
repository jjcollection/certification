<?php
/* @var $this ProfilMahasiswaController */
/* @var $model ProfilMahasiswa */

$this->breadcrumbs=array(
	'Profil Mahasiswas'=>array('index'),
	$model->nim=>array('view','id'=>$model->nim),
	'Update',
);

$this->menu=array(
	array('label'=>'Lihat Profil Mahasiswa', 'url'=>array('view', 'id'=>$model->nim)),
	array('label'=>'Kelola Profil Mahasiswa', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>