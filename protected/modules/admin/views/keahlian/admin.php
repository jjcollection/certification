<?php

/* @var $this KeahlianController */
/* @var $model Keahlian */

$this->breadcrumbs = array(
    'Keahlians' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Tambah Keahlian', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#keahlian-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'keahlian-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'header' => "No",
            'value' => '(
                $this->grid->dataProvider->pagination->currentPage*
                                       $this->grid->dataProvider->pagination->pageSize
                                      )+
                                      array_search($data,$this->grid->dataProvider->getData())+1',
        ),
        'namaKeahlian',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
