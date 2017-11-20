<?php
/* @var $this PelaksanaanController */
/* @var $model Pelaksanaan */

$this->breadcrumbs = array(
    'Pelaksanaan' => array('index'),
    'Admin',
);

$this->menu = array(
    array('label' => 'Data Pelaksanaan', 'url' => array('index')),
    array('label' => 'Tambah Pelaksanaan', 'url' => array('periodePelaksanaan/admin')),
);
?>


<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->



<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'pelaksanaan-grid',
    'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
    'dataProvider' => $model->search(),
    'template' => '{items}{pager}<br>{summary}',
    'columns' => array(
        array(
            'header' => "No",
            'value' => '(
                $this->grid->dataProvider->pagination->currentPage*
                                       $this->grid->dataProvider->pagination->pageSize
                                      )+
                                      array_search($data,$this->grid->dataProvider->getData())+1',
        ),
        'idKeahlian0.namaKeahlian',
        'idPengajar0.kodeDosen',
        'idPengajar0.namaDosen',
        'tglBuka',
        'tglTutup',
        'tglPelaksanaan',
        array(
            'name' => 'waktu',
            'type' => 'raw',
            'header' => 'Waktu',
            'headerHtmlOptions' => array('width' => '10%', 'style' => 'label label-info text-align:center'),
            'value' => '$data["waktu"]',
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
        ),
        'status',
        array(
            'class' => 'CButtonColumn',
            'template' => '{ubah}{hapus}',
            'buttons' => array
                (
                'ubah' => array
                    (
                    'label' => 'Ubah ',
                    'options' => array('class' => 'label label-info'),
                    'url' => 'Yii::app()->createUrl("admin/pelaksanaan/update", array("id"=>$data->idPelaksanaan))',
                ),
                'hapus' => array
                    (
                    'label' => ' Hapus',
                    'options' => array('class' => 'label label-danger'),
                    'url' => 'Yii::app()->createUrl("admin/pelaksanaan/delete", array("id"=>$data->idPelaksanaan))',
                ),
            ),
        ),
    ),
));
?>


<?php
//array(
//    'class' => 'CButtonColumn',
//    'template' => '{tambah}{ubah}{hapus}',
//    'buttons' => array
//        (
//        'tambah' => array
//            (
//            'label' => 'Tambah Pelaksanaan | ',
//            'imageUrl' => Yii::app()->request->baseUrl . '/images/plus.png',
//            'options' => array('class' => 'create'),
//            'url' => ' Yii::app()->createUrl("/admin/pelaksanaan/create", array("idPelaksanaan"=>$data->idPelaksanaan))',
//        ),
//        'ubah' => array
//            (
//            'label' => 'Ubah | ',
//            // 'imageUrl' => Yii::app()->request->baseUrl . '/images/update.png',
//            'options' => array('class' => 'update'),
//            'url' => '$data->idPelaksanaan',
//        ),
//        'hapus' => array
//            (
//            'label' => 'Hapus',
//            // 'imageUrl' => Yii::app()->request->baseUrl . '/images/delete.png',
//            'options' => array('class' => 'delete'),
//            'url' => '$data->idPelaksanaan',
//        ),
//    ),
//);
?>