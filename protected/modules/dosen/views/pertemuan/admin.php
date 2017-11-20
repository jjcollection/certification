<?php
/* @var $this PertemuanController */
/* @var $model Pertemuan */

$this->breadcrumbs = array(
    'Pertemuan' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Tambah Pertemuan', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pertemuan-grid').yiiGridView('update', {
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
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'pertemuan-grid',
    'dataProvider' => $model->search(),
   // 'filter' => $model,
    'columns' => array(
        array(
            'header' => "No",
            'value' => '(
                $this->grid->dataProvider->pagination->currentPage*
                                       $this->grid->dataProvider->pagination->pageSize
                                      )+
                                      array_search($data,$this->grid->dataProvider->getData())+1',
        ),
        'tanggal',
        'materi',
        array(
            'class' => 'CButtonColumn',
            'template' => '{ubah}{hapus}',
            'buttons' => array
                (
                'ubah' => array
                    (
                    'label' => 'Ubah ',
                    'options' => array('class' => 'label label-info'),
                    'url' => 'Yii::app()->createUrl("dosen/pertemuan/update", array("id"=>$data->idPertemuan))',
                ),
                'hapus' => array
                    (
                    'label' => ' Hapus',
                    'options' => array('class' => 'label label-danger'),
                    'url' => 'Yii::app()->createUrl("dosen/pertemuan/delete", array("id"=>$data->idPertemuan))',
                ),
            ),
        ),
    ),
));
?>
