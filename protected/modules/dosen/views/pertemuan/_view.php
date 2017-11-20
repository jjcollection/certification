<?php
/* @var $this PertemuanController */
/* @var $data Pertemuan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPertemuan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPertemuan), array('view', 'id'=>$data->idPertemuan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPelaksanaan')); ?>:</b>
	<?php echo CHtml::encode($data->idPelaksanaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materi')); ?>:</b>
	<?php echo CHtml::encode($data->materi); ?>
	<br />


</div>