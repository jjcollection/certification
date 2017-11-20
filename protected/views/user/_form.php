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

<div class="sky-form boxede" id="register">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
            <!-- ALERT -->
            <div class="alert alert-mini alert-danger margin-bottom-30">
                Fields with <span class="required">*</span> are required.
                <?php echo $form->errorSummary($model); ?>
            </div><!-- /ALERT -->
            <div class="box-static box-transparent box-bordered padding-30">
                <div class="box-title margin-bottom-30">
                    <h2 class="size-20">Don't have an account yet?</h2>
                </div>
                <fieldset>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>NIM *</label>
                                <label class="input margin-bottom-10">
                                    <i class="ico-append fa fa-user"></i>
                                    <?php echo $form->textField($model, 'username', array('class' => 'span5', 'maxlength' => 20)); ?>
                                    <b class="tooltip tooltip-bottom-right">NIM</b>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Nama Lengkap *</label>
                                <label class="input margin-bottom-10">
                                    <i class="ico-append fa fa-user"></i>
                                    <?php echo $form->textField($modelMhs, 'nama', array('class' => 'span5', 'maxlength' => 20)); ?>
                                    <b class="tooltip tooltip-bottom-right">Your First Name</b>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Program Studi *</label>
                                <label class="input margin-bottom-10">
                                   <?php echo CHtml::activeDropDownList($modelMhs, 'kodeProdi', $model->getProdi(), array('prompt' => 'Pilih Prodi', 'class' => 'form-control')); ?>
                                    <b class="tooltip tooltip-bottom-right">Program Studi</b>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="register:email">Email *</label>
                                <label class="input margin-bottom-10">
                                    <i class="ico-append fa fa-envelope"></i>
                                    <?php echo $form->textField($model, 'email', array('class' => 'span5', 'maxlength' => 50)); ?>
                                    <b class="tooltip tooltip-bottom-right">Your Email</b>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="register:email">No Handphone *</label>
                                <label class="input margin-bottom-10">
                                    <i class="ico-append fa fa-envelope"></i>
                                    <?php echo $form->textField($modelMhs, 'tlp', array('class' => 'span5', 'maxlength' => 50)); ?>
                                    <b class="tooltip tooltip-bottom-right">Your Email</b>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="register:pass1">Password *</label>
                                <label class="input margin-bottom-10">
                                    <i class="ico-append fa fa-lock"></i>
                                    <?php echo $form->passwordField($model, 'password', array('class' => 'err', 'maxlength' => 255)); ?>
                                    <b class="tooltip tooltip-bottom-right">Min. 6 characters</b>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <label class="checkbox nomargin"><input class="checked-agree" type="checkbox" name="checkbox"><i></i>I agree to the <a href="#" data-toggle="modal" data-target="#termsModal">Terms of Service</a></label>
                    <label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Subscribe to newsletter</label>
                </fieldset>
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
</div>
<?php $this->endWidget(); ?>