<?php
/* @var $this KeahlianController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Keahlians',
);

$this->menu=array(
	array('label'=>'Tambah Keahlian', 'url'=>array('create')),
	array('label'=>'Kelola Keahlian', 'url'=>array('admin')),
);
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
