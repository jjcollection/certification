<?php
/* @var $this NilaiMasterController */
/* @var $model NilaiMaster */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'nilai-master-form',
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
    <?php echo $form->labelEx($model, 'absensi'); ?>
    <?php echo $form->textField($model, 'absensi', array('class' => 'form-control', 'style' => 'width:30%')); ?>
    <?php echo $form->error($model, 'absensi', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'tugas'); ?>
    <?php echo $form->textField($model, 'tugas', array('class' => 'form-control', 'style' => 'width:30%')); ?>
    <?php echo $form->error($model, 'tugas', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'ujian'); ?>
    <?php echo $form->textField($model, 'ujian', array('class' => 'form-control', 'style' => 'width:30%')); ?>
    <?php echo $form->error($model, 'ujian', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'na'); ?>
    <?php echo $form->textField($model, 'na', array('class' => 'form-control', 'style' => 'width:30%')); ?>
    <?php echo $form->error($model, 'na', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php
    if ($model->isNewRecord) {
        echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-success'), '<i class="fa fa-save"></i> Tambah');
    } else {
        echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-info'), '<i class="fa fa-save"></i> Simpan');
    }
    ?>
</div>

<?php $this->endWidget(); ?>
