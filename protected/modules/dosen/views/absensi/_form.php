<?php
/* @var $this AbsensiController */
/* @var $model Absensi */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'absensi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="text-info">Kolom dengan tanda <span class="required">*</span> tidak boleh kosong.</p>
	<div class="text-danger">
	<?php echo $form->errorSummary($model); ?>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'idPelaksanaan'); ?>
		<?php echo $form->textField($model,'idPelaksanaan', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'idPelaksanaan',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nim'); ?>
		<?php echo $form->textField($model,'nim', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'nim',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'statusKehadiran'); ?>
		<?php echo $form->textField($model,'statusKehadiran', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'statusKehadiran',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tglAbsen'); ?>
		<?php echo $form->textField($model,'tglAbsen', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'tglAbsen',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
                 <?php
if($model->isNewRecord)
{
echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-success'),'<i class="fa fa-save"></i> Create');
}
else
{
echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-info'),'<i class="fa fa-save"></i> Save');
}
?>
	</div>

<?php $this->endWidget(); ?>
