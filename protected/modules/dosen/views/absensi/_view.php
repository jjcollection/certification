<?php
/* @var $this AbsensiController */
/* @var $data Absensi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAbsensi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAbsensi), array('view', 'id'=>$data->idAbsensi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPelaksanaan')); ?>:</b>
	<?php echo CHtml::encode($data->idPelaksanaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nim')); ?>:</b>
	<?php echo CHtml::encode($data->nim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusKehadiran')); ?>:</b>
	<?php echo CHtml::encode($data->statusKehadiran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglAbsen')); ?>:</b>
	<?php echo CHtml::encode($data->tglAbsen); ?>
	<br />


</div>