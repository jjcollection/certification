<?php
/* @var $this AbsensiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Absensi',
);

$this->menu=array(
	array('label'=>'Create Absensi', 'url'=>array('create')),
	array('label'=>'Manage Absensi', 'url'=>array('admin')),
);
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
