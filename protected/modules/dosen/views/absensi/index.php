<?php
/* @var $this AbsensiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Absensis',
);

$this->menu=array(
	array('label'=>'Create Absensi', 'url'=>array('create')),
	array('label'=>'Manage Absensi', 'url'=>array('admin')),
);
?>

<h1>Absensis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
