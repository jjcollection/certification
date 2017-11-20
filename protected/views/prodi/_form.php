<?php
/* @var $this ProdiController */
/* @var $model Prodi */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'prodi-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>

<p class="text-info">Kolom dengan tanda <span class="required">*</span> tidak boleh kosong.</p>
<div class="text-danger">
    <?php echo $form->errorSummary($model); ?>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'kodeProdi'); ?>
<?php echo $form->textField($model, 'kodeProdi', array('size' => 50, 'maxlength' => 50, 'class' => 'form-control', 'style' => 'width:30%')); ?>
<?php echo $form->error($model, 'kodeProdi', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'namaProdi'); ?>
<?php echo $form->textField($model, 'namaProdi', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control', 'style' => 'width:30%')); ?>
<?php echo $form->error($model, 'namaProdi', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php
    if ($model->isNewRecord) {
        echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-success'), '<i class="fa fa-save"></i> Create');
    } else {
        echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-info'), '<i class="fa fa-save"></i> Save');
    }
    ?>
</div>

<?php $this->endWidget(); ?>
