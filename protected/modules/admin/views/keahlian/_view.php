<?php
/* @var $this KeahlianController */
/* @var $data Keahlian */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idKeahlian')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idKeahlian), array('view', 'id'=>$data->idKeahlian)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaKeahlian')); ?>:</b>
	<?php echo CHtml::encode($data->namaKeahlian); ?>
	<br />


</div>