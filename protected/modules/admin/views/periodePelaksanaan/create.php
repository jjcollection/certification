<?php
/* @var $this PeriodeController */
/* @var $model Periode */

$this->breadcrumbs = array(
    'Periode' => array('admin'),
    'Tambah Periode',
);

$this->menu=array(
    array('label'=>'List Periode Pelaksanaan', 'url'=>array('index')),
    array('label'=>'Admin Periode Pelaksanaan', 'url'=>array('admin')),
); 
?>
<br/>
<?php $this->renderPartial('_form', array('model' => $model)); ?>