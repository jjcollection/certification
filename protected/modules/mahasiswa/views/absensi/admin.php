<?php
/* @var $this AbsensiController */
/* @var $model Absensi */

$this->breadcrumbs = array(
    'Absensi' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Absensi', 'url' => array('index')),
    array('label' => 'Create Absensi', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#absensi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>

<span class="title elipsis">
    <strong>PILIH SERTIFIKASI</strong> <!-- panel title -->
    <small class="size-12 weight-300 text-mutted hidden-xs">Yang anda ikuti untuk melakukan absen.</small>
</span>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'pendaftaran-grid',
    'dataProvider' => $modelPendaftaran->search(),
    // 'filter' => $model,
    'columns' => array(
        array(
            'header' => "No",
            'htmlOptions' => array('width' => '', 'style' => 'text-align:center'),
            'headerHtmlOptions' => array('width' => '', 'style' => 'text-align:center'),
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
            'template' => '{ubah}',
            'buttons' => array
                (
                'ubah' => array
                    (
                    'label' => 'Absen',
                    // 'imageUrl' => Yii::app()->request->baseUrl . '/images/update.png',
                    'options' => array('class' => 'label label-success'),
                    'url' => 'Yii::app()->createUrl("mahasiswa/pertemuan/admin", array("id"=>$data->idPendaftaran))',
                ),
            ),
        ),
    ),
));
?>



