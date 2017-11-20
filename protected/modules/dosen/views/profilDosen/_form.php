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
                             <?php echo $form->errorSummary($model); ?>
                            <div class="form-group">
                                                          
                                <div class="col-lg-12">
                                    <label class="text-left">Kode Dosen *</label>
                                    <?php echo $form->textField($model, 'kodeDosen', array('size' => 20, 'maxlength' => 20, 'placeholder' => 'Inisial Dosen', 'class' => 'form-control')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="text-left">Password *</label>
                                    <?php echo $form->passwordField($modelUser, 'password', array('class' => 'form-control err', 'maxlength' => 255)); ?>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="text-left">Dosen Pengajar *</label>
                                    <?php echo $form->textField($model, 'namaDosen', array('size' => 20, 'maxlength' => 20, 'placeholder' => 'Nama Lengkap', 'class' => 'form-control')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-md-6">
                                    <label class="text-left">Telepon/HP *</label>
                                    <?php echo $form->textField($model, 'telp', array('size' => 50, 'maxlength' => 50, 'placeholder' => 'No. Handphone', 'class' => 'form-control')); ?>
                                    <span class="fancy-tooltip top-left"> <!-- positions: .top-left | .top-right -->
                                        <em>Masukan Tlp/HP</em>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="text-left">Alamat *</label>
                                    <?php echo $form->textArea($model, 'alamat', array('placeholder' => 'Masukan Alamat', 'class' => 'form-control')); ?>
                                    <span class="fancy-tooltip top-left"> <!-- positions: .top-left | .top-right -->
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="text-left">Email *</label>
                                    <?php echo $form->textField($model, 'email', array('size' => 20, 'maxlength' => 20, 'placeholder' => 'Masukan Email', 'class' => 'form-control')); ?>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            if ($model->isNewRecord) {
                                echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-info'), '<i class="fa fa-save"></i> Daftar');
                            } else {
                                echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-success'), '<i class="fa fa-save"></i> Save');
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
                        <p>semua kolom wajib diisi ketika melakukan setting jadwal.</p>
                    </pre>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endWidget(); ?>
