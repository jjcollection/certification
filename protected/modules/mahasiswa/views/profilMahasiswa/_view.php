<?php
/* @var $this ProfilMahasiswaController */
/* @var $data ProfilMahasiswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nim')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nim), array('view', 'id'=>$data->nim)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tlp')); ?>:</b>
	<?php echo CHtml::encode($data->tlp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeProdi')); ?>:</b>
	<?php echo CHtml::encode($data->kodeProdi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUser')); ?>:</b>
	<?php echo CHtml::encode($data->idUser); ?>
	<br />


</div>