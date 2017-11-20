<?php
/* @var $this ProdiController */
/* @var $data Prodi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeProdi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kodeProdi), array('view', 'id'=>$data->kodeProdi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaProdi')); ?>:</b>
	<?php echo CHtml::encode($data->namaProdi); ?>
	<br />


</div>