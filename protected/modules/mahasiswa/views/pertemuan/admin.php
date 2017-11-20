<?php
/* @var $this PertemuanController */
/* @var $model Pertemuan */

$this->breadcrumbs = array(
    'Pertemuans' => array('index'),
    'Manage',
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

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pertemuan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<?php echo $form->errorSummary($model); ?>
<?php $this->endWidget(); ?>
<h3>Materi Pertemuan # <?php
   
     //echo $idPendaftaran;
     $cmd=Yii::app()->db->createCommand("select * from tbl_pendaftaran where idPendaftaran=$idPendaftaran")->queryRow();
     $idPelaksanaan=$cmd['idPelaksanaan'];
     $cmdPelaksanaan=Yii::app()->db->createCommand("select * from tbl_pelaksanaan where idPelaksanaan=$idPelaksanaan")->queryRow();
     $idKeahlian=$cmdPelaksanaan['idKeahlian'];
     $cmdKehalian=Yii::app()->db->createCommand("select * from tbl_keahlian where idKeahlian=$idKeahlian")->queryRow();
     echo "<span class='label label-success'>".$cmdKehalian['namaKeahlian']."</span>";
    ?></h3>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'pertemuan-grid',
    'dataProvider' => $model->searchPertemuan($idPendaftaran),
    //'filter' => $model,
    'columns' => array(
        array(
            'header' => "No",
            'value' => '(
                $this->grid->dataProvider->pagination->currentPage*
                                       $this->grid->dataProvider->pagination->pageSize
                                      )+
                                      array_search($data,$this->grid->dataProvider->getData())+1',
        ),
        //'idPelaksanaan0.idKeahlian0.namaKeahlian',
        'tanggal',
        'idPelaksanaan0.waktu',
        'materi',
        array(
            'name' => 'absensis.statusKehadiran',
            'value' => '($data->primaryStatus()==null)?"Tidak Hadir":"Hadir"',
            'type' => 'raw',
        // 'rowCssClassExpression'=>'label label-info',
        //'htmlOptions'=>array('class'=>'label-info'),
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{absen}',
            'buttons' => array
                (
                'absen' => array
                    (
                    'label' => 'Absen ',
                    'options' => array('class' => 'label label-info'),
                    'url' => 'Yii::app()->createUrl("mahasiswa/absensi/create", array("id"=>$data->idPertemuan,"idPendaftaran"=>"'.$idPendaftaran.'"))',
                    'visible'=>$model->primaryStatus()==null ? "true":"false",
                ),
            ),
        ),
    ),
));
?>

