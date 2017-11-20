<?php
/* @var $this PelaksanaanController */
/* @var $model Pelaksanaan */
/* @var $form CActiveForm */
?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'pelaksanaan-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>
<div id="content" class="padding-20">
    <div class="row hor">
        <div class="col-md-6">
            <div>
                <div class="panel-body">
                    <fieldset>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label class="text-left">Program Keahlian *</label>
                                    <?php echo CHtml::activeDropDownList($model, 'idKeahlian', $model->getKeahlian(), array('prompt' => 'Pilih Program Keahlian', 'class' => 'form-control')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="text-left">Dosen Pengajar *</label>
                                    <?php echo CHtml::activeDropDownList($model, 'idPengajar', $model->getDosen(), array('prompt' => 'Pilih Pengajar', 'class' => 'form-control')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-md-6">
                                    <label class="text-left">Tanggal Buka *</label>
                                    <?php
                                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                        'model' => $model,
                                        'attribute' => 'tglBuka',
                                        'name' => 'tglBuka',
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
                                <div class="col-md-6 col-md-6">
                                    <label class="text-left">Tanggal Tutup *</label>
                                    <?php
                                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                        'model' => $model,
                                        'attribute' => 'tglTutup',
                                        'name' => 'tglTutup',
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
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-md-6">
                                    <label class="text-left">Tanggal Pelaksanaan *</label>
                                    <?php
                                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                        'model' => $model,
                                        'attribute' => 'tglPelaksanaan',
                                        'name' => 'tglPelaksanaan',
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
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="text-left">Status *</label>
                                    <?php echo CHtml::activeDropDownList($model, 'status', $model->getStatus(), array('prompt' => 'Pilih Status', 'class' => 'form-control')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="text-left">Jml.Pertemuan</label>
                                    <?php echo CHtml::activeDropDownList($model, 'jmlPertemuan', $model->getJumlah(), array('prompt' => 'Pilih', 'class' => 'form-control')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="text-left">Waktu</label>
                                    <?php echo $form->textField($model, 'waktu', array('placeholder' => '01:00-03:00', 'class' => 'form-control')); ?>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            if ($model->isNewRecord) {
                                echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-info'), '<i class="fa fa-save"></i> Simpan');
                            } else {
                                echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-success'), '<i class="fa fa-save"></i> Ubah');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">

            <div class="panel panel-default">
                <div class="panel-body">

                    <h4>Bagaimana cara kerjanya ?</h4>
                    <p><em>halaman berikut digunakan untuk melakukan setting jadwal Sertifikasi</em></p>
                    <hr />

                    Status <span class="label label-success"><strong>Aktif</strong></span> digunakan jika pelaksanaan sertifikasi sedang terjadwal sehingga mahasiswa dapat melakukan pendaftaran. sebaliknya
                    jika Status <span class="label label-danger"><strong>Tidak Aktif</strong></span> berarti masa pendaftaran sudah lewat atau tidak ada pelaksanaan sertifikasi.
                    </p>

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">

                    <a href="javascript:;" onclick="jQuery('#pre-0').slideToggle();" class="btn btn-info btn-xs">Catatan</a>
                    <pre id="pre-0" class="text-left noradius text-danger softhide margin-top-20 margin-bottom-0">
                        <p>semuak kolom wajib diisi ketika melakukan setting jadwal.</p>
                    </pre>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endWidget(); ?>
