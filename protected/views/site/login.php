<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<div class="sky-form boxed">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <header class="size-18 margin-bottom-20">
                        Login
                    </header>
                    <fieldset class="nomargin">
                        <label class="input margin-bottom-10">
                            <i class="ico-append fa fa-envelope"></i>
                            <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
                            <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                        </label>
                        <label class="input margin-bottom-10">
                            <i class="ico-append fa fa-lock"></i>
                            <?php echo $form->passwordField($model, 'password'); ?>
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label>
                        <?php echo $form->checkBox($model, 'rememberMe'); ?>
                        <i></i> Keep me logged in
                    </fieldset>
                    <footer>
                        <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary noradius pull-right')); ?>
                        <!--<button type="submit" class="btn btn-primary noradius pull-right"><i class="fa fa-check"></i> OK, LOG IN</button>-->
                    </footer>
                    <?php echo $form->errorSummary($model); ?>
                </div>
                <div class="col-md-6 col-sm-6">
                    <header class="size-18 margin-bottom-20">
                        Media Sosial Kami :
                    </header>
                    <fieldset class="nomargin">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <a class="btn btn-block btn-social btn-facebook margin-bottom-10">
                                    <i class="fa fa-facebook"></i> Our Facebook
                                </a>
                                <a class="btn btn-block btn-social btn-twitter margin-bottom-10">
                                    <i class="fa fa-twitter"></i> Our Twitter
                                </a>
                                <a class="btn btn-block btn-social btn-3d margin-bottom-10">
                                    <i class="fa fa-instagram"></i> Our Instagram
                                </a>
                            </div>
                        </div>
                    </fieldset>
                    <footer>
                        Apakah anda tidak mempunyai akun ? <a href="index.php?r=user/create"><strong>Click to register!</strong></a>
                    </footer>
                </div>
            </div>
        </div>
    </section>
    <?php $this->endWidget(); ?>
</div><!-- form -->
