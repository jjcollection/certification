<?php
/* @var $this PelaksanaanController */
/* @var $model Pelaksanaan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPelaksanaan'); ?>
		<?php echo $form->textField($model,'idPelaksanaan', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idKeahlian'); ?>
		<?php echo $form->textField($model,'idKeahlian', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPengajar'); ?>
		<?php echo $form->textField($model,'idPengajar', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglBuka'); ?>
		<?php echo $form->textField($model,'tglBuka', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglTutup'); ?>
		<?php echo $form->textField($model,'tglTutup', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>50,'maxlength'=>50, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->