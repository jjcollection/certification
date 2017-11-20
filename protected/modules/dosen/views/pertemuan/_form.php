<?php
/* @var $this PertemuanController */
/* @var $model Pertemuan */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'pertemuan-form',
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
    <?php echo $form->labelEx($model, 'idPelaksanaan'); ?>
    
    <?php 
    $models= Pelaksanaan::model()->with('idKeahlian0')->findAll();
    $data=array();
    foreach ($models as $value) {
        $data[$value->idPelaksanaan]=$value->idPengajar.' - '.$value->idKeahlian0->namaKeahlian.' - '.$value->waktu;
    }
    echo CHtml::activeDropDownList($model, 'idPelaksanaan', $data, array('prompt' => 'Pilih Pelaksanaan', 'class' => 'form-control','style'=>'width:40%')); ?>
    <?php echo $form->error($model, 'idPelaksanaan', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'tanggal'); ?>
    <?php
    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model' => $model,
        'attribute' => 'tanggal',
        'name' => 'tanggal',
        'options' => array(
            'showAnim' => 'fold',
            'altFormat' => 'yy-mm-dd',
            'dateFormat' => 'yy-mm-dd',
            'changeMonth' => true,
            'changeYear' => true,
        ),
        'htmlOptions' => array(
             'style' => 'width:40%;',
            //'value'=> date('Y-m-d'),
            'class' => 'form-control',
            'placeholder' => date('Y-m-d'),
        ),
    ));
    ?>
    <?php echo $form->error($model, 'tanggal', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'materi'); ?>
    <?php echo $form->textArea($model, 'materi', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
    <?php echo $form->error($model, 'materi', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php
    if ($model->isNewRecord) {
        echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-success'), '<i class="fa fa-save"></i> Simpan');
    } else {
        echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-info'), '<i class="fa fa-save"></i> Ubah');
    }
    ?>
</div>

<?php $this->endWidget(); ?>
