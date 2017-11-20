<?php
/* @var $this PertemuanController */
/* @var $model Pertemuan */
/* @var $form CActiveForm */
?>

<div class="form-group">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>
    <div class="form-group">
        <?php echo $form->label($model, 'idPelaksanaan'); ?>
        <?php
        $models = Pelaksanaan::model()->with('idKeahlian0')->findAll();
        $data = array();
        foreach ($models as $value) {
            $data[$value->idPelaksanaan] = $value->idPengajar . ' - ' . $value->idKeahlian0->namaKeahlian . ' - ' . $value->waktu;
        }
        echo CHtml::activeDropDownList($model, 'idPelaksanaan', $data, array('prompt' => 'Pilih Pelaksanaan', 'class' => 'form-control', 'style' => 'width:40%'));
        ?>
    </div>
    <div class="form-group">
        <?php echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-info'), '<i class="fa fa-search"></i> Search'); ?>
    </div>
    <?php $this->endWidget(); ?>
</div><!-- search-form -->