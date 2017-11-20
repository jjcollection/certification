<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('idPendaftaran')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPendaftaran),array('view','id'=>$data->idPendaftaran)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUser')); ?>:</b>
	<?php echo CHtml::encode($data->idUser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPelaksanaan')); ?>:</b>
	<?php echo CHtml::encode($data->idPelaksanaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggalDaftar')); ?>:</b>
	<?php echo CHtml::encode($data->tanggalDaftar); ?>
	<br />


</div>