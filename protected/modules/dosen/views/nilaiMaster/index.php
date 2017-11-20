<?php
/* @var $this NilaiMasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nilai Masters',
);

$this->menu=array(
	array('label'=>'Create NilaiMaster', 'url'=>array('create')),
	array('label'=>'Manage NilaiMaster', 'url'=>array('admin')),
);
?>

<h1>Nilai Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
