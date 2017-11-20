<?php
/* @var $this PelaksanaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelaksanaans',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Pelaksanaan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Pelaksanaan', 'url'=>array('admin')),
);
?>

<h1>Pelaksanaan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
