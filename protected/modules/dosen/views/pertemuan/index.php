<?php
/* @var $this PertemuanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pertemuans',
);

$this->menu=array(
	array('label'=>'Create Pertemuan', 'url'=>array('create')),
	array('label'=>'Manage Pertemuan', 'url'=>array('admin')),
);
?>

<h1>Pertemuans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
