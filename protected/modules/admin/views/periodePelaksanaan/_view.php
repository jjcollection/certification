<?php
/* @var $this PeriodeController */
/* @var $data Periode */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPeriodePelaksanaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPeriodePelaksanaan), array('view', 'id'=>$data->idPeriodePelaksanaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl')); ?>:</b>
	<?php echo CHtml::encode($data->tgl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bulan')); ?>:</b>
	<?php echo CHtml::encode($data->bulan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglPeriode')); ?>:</b>
	<?php echo CHtml::encode($data->tglPeriode); ?>
	<br />


</div>