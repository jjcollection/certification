<?php
/* @var $this ProfilMahasiswaController */
/* @var $model ProfilMahasiswa */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'profil-mahasiswa-form',
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
    <?php echo $form->labelEx($model, 'nim'); ?>
    <?php echo $form->textField($model, 'nim', array('class' => 'form-control', 'style' => 'width:30%')); ?>
    <?php echo $form->error($model, 'nim', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'nama'); ?>
    <?php echo $form->textField($model, 'nama', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control', 'style' => 'width:30%')); ?>
    <?php echo $form->error($model, 'nama', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'tlp'); ?>
    <?php echo $form->textField($model, 'tlp', array('size' => 20, 'maxlength' => 20, 'class' => 'form-control', 'style' => 'width:30%')); ?>
    <?php echo $form->error($model, 'tlp', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'kodeProdi'); ?>
    <?php echo CHtml::activeDropDownList($model, 'kodeProdi', User::model()->getProdi(), array('prompt' => 'Pilih Prodi', 'class' => 'form-control', 'style' => 'width:40%')); ?>
    <?php echo $form->error($model, 'kodeProdi', array('class' => 'text-danger')); ?>
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
