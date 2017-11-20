<?php
/* @var $this ProfilMahasiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profil Mahasiswas',
);

$this->menu=array(
	array('label'=>'Create ProfilMahasiswa', 'url'=>array('create')),
	array('label'=>'Manage ProfilMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Profil Mahasiswas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
