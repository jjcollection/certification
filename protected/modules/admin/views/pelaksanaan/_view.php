<?php
/* @var $this PelaksanaanController */
/* @var $data Pelaksanaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPelaksanaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPelaksanaan), array('view', 'id'=>$data->idPelaksanaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idKeahlian')); ?>:</b>
	<?php echo CHtml::encode($data->idKeahlian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPengajar')); ?>:</b>
	<?php echo CHtml::encode($data->idPengajar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglBuka')); ?>:</b>
	<?php echo CHtml::encode($data->tglBuka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglTutup')); ?>:</b>
	<?php echo CHtml::encode($data->tglTutup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>