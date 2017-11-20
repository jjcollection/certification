<?php
/* @var $this NilaikpController */
/* @var $model Nilaikp */

$this->breadcrumbs = array(
    'Periode' => array('index'),
    'Kelola',
);
//$this->menu = array(
//    array('label' =>'<i class="fa fa-plus"></i><span>Tambah</span>', 'url' => array('create')),
//);
Yii::app()->clientScript->registerScript('down', "
jQuery('#nilaikp-grid a.down').live('click',function() {
        if(!confirm('Are you sure you want to mark this commission as PAID?')) return false;
        
        var url = $(this).attr('href');
        //  do your post request here
        $.post(url,function(res){
             alert(res);
         });
        return false;
});
");

$this->renderPartial('_search', array(
    'model' => $model,
));
?>
<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">
            <header class="main-box-header clearfix">
                <h2 class="pull-left"><i class="fa fa-bars"></i> Periode Sidang</h2> 
                <div class="filter-block pull-right">                                                   
                    <?php echo CHtml::link('<i class="fa  fa-plus-circle fa-lg"></i> Tambah Periode', array('create'), array('class' => 'btn btn-success pull-left')); ?>
                </div>
            </header>
            <div class="main-box-body clearfix">  
                <div class="table-responsive">
                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'periode-grid',
                        'dataProvider' => $model->search(),
                        //'filter' => $model,
                        'columns' => array(
                            array(
                                'header' => "No",
                                'value' => '($this->grid->dataProvider->pagination->currentPage*
                           $this->grid->dataProvider->pagination->pageSize
                          )+
                          array_search($data,$this->grid->dataProvider->getData())+1',
                            ),
                            array(
                                'name' => 'bulan',
                                'type' => 'raw',
                                'header' => 'Bulan',
                                'value' => 'CHtml::encode($data->ubahBulan())',
                                'htmlOptions' => array('width' => ''),
                            ),
                            'tahun',
                            array
                                (
                                'class' => 'CButtonColumn',
                                'template' => '{create}{ubah}{hapus}',
                                'buttons' => array
                                    (
                                    'create' => array
                                        (
                                        'label' => 'Tambah Pelaksanaan | ',
                                        'imageUrl' => Yii::app()->request->baseUrl . '/images/plus.png',
                                        'options' => array('class' => 'label label-warning'),
                                        'url' => ' Yii::app()->createUrl("/admin/pelaksanaan/create", array("idPeriode"=>$data->idPeriodePelaksanaan))',
                                    ),
                                    'ubah' => array
                                        (
                                        'label' => 'Ubah | ',
                                        // 'imageUrl' => Yii::app()->request->baseUrl . '/images/update.png',
                                        'options' => array('class' => 'label label-info'),
                                        'url' => 'Yii::app()->createUrl("/admin/periodePelaksanaan/update", array("id"=>"$data->idPeriodePelaksanaan"))',
                                    ),
                                    'hapus' => array
                                        (
                                        'label' => 'Hapus',
                                        // 'imageUrl' => Yii::app()->request->baseUrl . '/images/delete.png',
                                        'options' => array('class' => 'label label-danger'),
                                        'url' => 'Yii::app()->createUrl("/admin/periodePelaksanaan/delete", array("id"=>"$data->idPeriodePelaksanaan"))',
                                    ),
                                ),
                            ),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>   
</div>
