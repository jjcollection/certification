<?php
/* @var $this ProfilDosenController */
/* @var $model ProfilDosen */

$this->breadcrumbs = array(
    'Profil Dosens' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List ProfilDosen', 'url' => array('index')),
    array('label' => 'Create ProfilDosen', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#profil-dosen-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'profil-dosen-grid',
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
        'kodeDosen',
        'namaDosen',
        'telp',
        'email',
        'alamat',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
