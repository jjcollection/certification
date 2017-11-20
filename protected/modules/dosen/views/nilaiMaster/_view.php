<?php
/* @var $this NilaiMasterController */
/* @var $data NilaiMaster */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idNilaiMaster')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idNilaiMaster), array('view', 'id'=>$data->idNilaiMaster)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPendaftaran')); ?>:</b>
	<?php echo CHtml::encode($data->idPendaftaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglPenilaian')); ?>:</b>
	<?php echo CHtml::encode($data->tglPenilaian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('absensi')); ?>:</b>
	<?php echo CHtml::encode($data->absensi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tugas')); ?>:</b>
	<?php echo CHtml::encode($data->tugas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ujian')); ?>:</b>
	<?php echo CHtml::encode($data->ujian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('na')); ?>:</b>
	<?php echo CHtml::encode($data->na); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jml')); ?>:</b>
	<?php echo CHtml::encode($data->jml); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhuruf')); ?>:</b>
	<?php echo CHtml::encode($data->nhuruf); ?>
	<br />

	*/ ?>

</div>