<?php
/* @var $this ProfilDosenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profil Dosens',
);

$this->menu=array(
	array('label'=>'Create ProfilDosen', 'url'=>array('create')),
	array('label'=>'Manage ProfilDosen', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
