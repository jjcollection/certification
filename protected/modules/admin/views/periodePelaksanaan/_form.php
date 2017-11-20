<?php
/* @var $this PeriodeController */
/* @var $model Periode */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'periode-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>

<div class="main-box">
    <div class="main-box-body clearfix">
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-lg-2 control-label"></label>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-10">  
                            <?php //echo CHtml::activeDropDownList($model, 'Tanggal', $model->getTanggalNamaSidang(), array('prompt' => 'Pilih Tanggal', 'class' => 'form-control'));  ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Periode [Bulan] :</label>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-10">        
                            <?php echo CHtml::activeDropDownList($model, 'bulan', Pendaftaran::model()->getBulan(), array('prompt' => 'Pilih Bulan', 'class' => 'form-control', 'style' => 'width:30%')); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Periode [Tahun] :</label>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-10">        
                            <?php echo CHtml::activeDropDownList($model, 'tahun', $model->getYear(), array('prompt' => 'Pilih Tahun', 'class' => 'form-control', 'style' => 'width:30%')); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Tanggal Pelaksanaan :</label>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-4">        
                            <?php
                            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                'model' => $model,
                                'attribute' => 'tglPeriode',
                                'name' => 'tglPeriode',
                                'options' => array(
                                    'showAnim' => 'fold',
                                    'altFormat' => 'yy-mm-dd',
                                    'dateFormat' => 'yy-mm-dd',
                                    'changeMonth' => true,
                                    'changeYear' => true,
                                ),
                                'htmlOptions' => array(
                                    // 'style' => 'width:120px;',
                                    //'value'=> date('Y-m-d'),
                                    'class' => 'form-control',
                                    'placeholder' => date('Y-m-d'),
                                ),
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <?php
                    if ($model->isNewRecord) {
                        echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-success'), '<i class="fa fa-save"></i> Create');
                    } else {
                        echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-info'), '<i class="fa fa-save"></i> Save');
                    }
                    ?>
                </div>
            </div> 
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
