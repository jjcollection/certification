<?php
/* @var $this PeriodeController */
/* @var $model Periode */

$this->breadcrumbs = array(
    'Periodes' => array('index'),
    $model->idPeriodePelaksanaan,
);
?>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">
            <header class="main-box-header clearfix">
                <h2 class="pull-left"><i class="fa fa-bars"></i> Periode Sidang</h2> 
                <div class="filter-block pull-right">                                                   
                    <?php echo CHtml::link('<i class="fa  fa-plus-circle fa-lg"></i>', array('pelaksanaan/create','idPeriode'=>$model->idPeriodePelaksanaan), array('class' => 'btn btn-primary pull-left')); ?>
                </div>
            </header>
            <div class="main-box-body clearfix">  
                <div class="table-responsive">
                    <?php
                    $this->widget('zii.widgets.CDetailView', array(
                        'data' => $model,
                        'attributes' => array(
                            'bulan',
                            'tahun',
                            'tglPeriode',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>   
</div>



