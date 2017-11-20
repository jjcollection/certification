<?php
/* @var $this ProfilDosenController */
/* @var $data ProfilDosen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeDosen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kodeDosen), array('view', 'id'=>$data->kodeDosen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaDosen')); ?>:</b>
	<?php echo CHtml::encode($data->namaDosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telp')); ?>:</b>
	<?php echo CHtml::encode($data->telp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUser')); ?>:</b>
	<?php echo CHtml::encode($data->idUser); ?>
	<br />


</div>