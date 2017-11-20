<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */

$this->breadcrumbs = array(
    'Pendaftaran' => array('index'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pendaftaran-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'pelaksanaan-grid',
    'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
    'dataProvider' => $modelPelaksanaan->search(),
    'template' => '{items}{pager}<br>{summary}',
                       

    'columns' => array(
        array(
            'header' => "No",
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
            'headerHtmlOptions'=>array('width' => '', 'style' => 'text-align:center'),
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
            'headerHtmlOptions' => array('width' => '10%', 'style' => 'text-align:center'),
            'value' => '$data["waktu"]',
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
        ),
        'status',
        array(
            'class' => 'CButtonColumn',
            'template' => '{ubah}',
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
            'buttons' => array
                (
                'ubah' => array
                    (
                    'label' => 'Daftar ',
                    'options' => array('class' => 'label label-info'),
                    'url' => 'Yii::app()->createUrl("mahasiswa/pendaftaran/create", array("id"=>$data->idPelaksanaan))',
                ),
            ),
        ),
    ),
));
?>
<hr/>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'pendaftaran-grid',
    'dataProvider' => $model->search(),
    // 'filter' => $model,
    'columns' => array(
        array(
            'header' => "No",
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
            'headerHtmlOptions'=>array('width' => '', 'style' => 'text-align:center'),
            'value' => '(
                $this->grid->dataProvider->pagination->currentPage*
                                       $this->grid->dataProvider->pagination->pageSize
                                      )+
                                      array_search($data,$this->grid->dataProvider->getData())+1',
        ),
        'idPelaksanaan0.idKeahlian0.namaKeahlian',
        'tanggalDaftar',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
