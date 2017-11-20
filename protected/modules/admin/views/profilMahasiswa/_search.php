<?php
/* @var $this ProfilMahasiswaController */
/* @var $model ProfilMahasiswa */
/* @var $form CActiveForm */
?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'nim'); ?>
		<?php echo $form->textField($model,'nim', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>
	<div class="form-group">
		<?php echo $form->label($model,'kodeProdi'); ?>
		<?php echo $form->textField($model,'kodeProdi',array('size'=>50,'maxlength'=>50, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-info'),'<i class="fa fa-search"></i> Cari');?>
	</div>
    <hr/>

<?php $this->endWidget(); ?>

</div><!-- search-form -->