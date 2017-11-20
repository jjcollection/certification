<?php
/* @var $this NilaiMasterController */
/* @var $model NilaiMaster */

$this->breadcrumbs = array(
    'Nilai Masters' => array('index'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nilai-master-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="search-form">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->
<hr/>
<?php
//$this->widget('zii.widgets.grid.CGridView', array(
//    'id' => 'pelaksanaan-grid',
//    'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
//    'dataProvider' => $modelPelaksanaan->search(),
//    'template' => '{items}{pager}<br>{summary}',
//    'columns' => array(
//        array(
//            'header' => "No",
//            'value' => '(
//                $this->grid->dataProvider->pagination->currentPage*
//                                       $this->grid->dataProvider->pagination->pageSize
//                                      )+
//                                      array_search($data,$this->grid->dataProvider->getData())+1',
//        ),
//        'idKeahlian0.namaKeahlian',
//        'idPengajar0.kodeDosen',
//        'idPengajar0.namaDosen',
//        'tglBuka',
//        'tglTutup',
//        'status',
//        array(
//            'class' => 'CButtonColumn',
//            'template' => '{penilaian}',
//            'buttons' => array
//                (
//                'penilaian' => array
//                    (
//                    'label' => 'Penilaian ',
//                    'options' => array('class' => 'label label-info'),
//                    'url' => 'Yii::app()->createUrl("admin/pelaksanaan/update", array("id"=>$data->idPelaksanaan))',
//                ),
//            ),
//        ),
//    ),
//));
?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'nilai-master-grid',
    'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
    'dataProvider' => $model->search(),
    // 'filter' => $model,
    'template' => '{items}{pager}<br>{summary}',
    'columns' => array(
        array(
            'header' => "No",
            'headerHtmlOptions' => array('width' => '10px', 'style' => 'text-align:center'),
            'value' => '(
                $this->grid->dataProvider->pagination->currentPage*
                                       $this->grid->dataProvider->pagination->pageSize
                                      )+
                                      array_search($data,$this->grid->dataProvider->getData())+1',
            'htmlOptions' => array('width' => '10px', 'style' => 'text-align:center'),
        ),
       
        array(
            'name' => 'namaKeahlian',
            'headerHtmlOptions' => array('width' => '35%', 'style' => 'text-align:left'),
            'value' => '$data->namaKeahlian',
            'htmlOptions' => array('width' => '', 'style' => 'text-align:left'),
        ),
        array(
            'name' => 'absensi',
            'type' => 'raw',
            'header' => 'N.Absen',
            'headerHtmlOptions' => array('width' => '10%', 'style' => 'text-align:center'),
            'value' => '$data["absensi"]',
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
        ),
        array(
            'name' => 'tugas',
            'type' => 'raw',
            'header' => 'N.Tugas',
            'headerHtmlOptions' => array('width' => '10%', 'style' => 'text-align:center'),
            'value' => '$data->tugas',
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
        ),
        array(
            'name' => 'ujian',
            'type' => 'raw',
            'header' => 'N.Ujian',
            'headerHtmlOptions' => array('width' => '10%', 'style' => 'text-align:center'),
            'value' => '$data->ujian',
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
        ),
        array(
            'name' => 'na',
            'type' => 'raw',
            'header' => 'N.A',
            'headerHtmlOptions' => array('width' => '10%', 'style' => 'text-align:center'),
            'value' => '$data->na',
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
        ),
        array(
            'name' => 'jml',
            'type' => 'raw',
            'header' => 'JML',
            'headerHtmlOptions' => array('width' => '10%', 'style' => 'text-align:center'),
            'value' => '$data->jml',
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
        ),
        array(
            'name' => 'nhuruf',
            'type' => 'raw',
            'header' => 'Index',
            'headerHtmlOptions' => array('width' => '10%', 'style' => 'text-align:center'),
            'value' => '$data->nhuruf',
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
        ),
        
    ),
));
?>
