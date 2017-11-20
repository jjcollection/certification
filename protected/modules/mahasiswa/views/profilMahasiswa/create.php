<?php
/* @var $this ProfilMahasiswaController */
/* @var $model ProfilMahasiswa */

$this->breadcrumbs=array(
	'Profil Mahasiswas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfilMahasiswa', 'url'=>array('index')),
	array('label'=>'Manage ProfilMahasiswa', 'url'=>array('admin')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>