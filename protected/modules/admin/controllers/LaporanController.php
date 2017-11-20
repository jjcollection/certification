<?php

class LaporanController extends Controller {
    private static $_isInitialized = false;
    private static $libPathPHPExcel = 'ext.heart.vendors.phpexcel.Classes.PHPExcel'; //the path to the PHP excel lib
    private static $libPathPDF = 'ext.heart.vendors.tcpdf.tcpdf'; //the path to the TCPDFlib

    public function actionIndex() {
        $this->layout = 'mainAdmin';
        $this->render('index');
    }

   public function actionLaporanNilai() {
        $model = new NilaiMaster();
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['NilaiMaster']))
            $model->attributes = $_POST['NilaiMaster'];

        $exportType = 'Excel5';
        $this->widget('ext.heart.export.EHeartExport', array(
            'title' => 'Laporan Nilai',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'grid_mode' => 'export',
            'exportType' => $exportType,
            'columns' => array(
                array(
                    'name' => 'NIM',
                    'type' => 'raw',
                    'header' => 'NIM',
                    'value' => 'CHtml::encode($data->idPendaftaran0->idUser0->username)',
                    'htmlOptions' => array('width' => '40px'),
                ),
                array(
                    'name' => 'nama',
                    'type' => 'raw',
                    'header' => 'Nama',
                    'value' => 'CHtml::encode($data->nama)',
                    'htmlOptions' => array('width' => ''),
                ),
                array(
                    'name' => 'absensi',
                    'type' => 'raw',
                    'header' => 'N. Absensi',
                    'value' => 'CHtml::encode($data->absensi)',
                    'htmlOptions' => array('width' => ''),
                ),
                 array(
                    'name' => 'tugas',
                    'type' => 'raw',
                    'header' => 'N. Tugas',
                    'value' => 'CHtml::encode($data->tugas)',
                    'htmlOptions' => array('width' => ''),
                ),
                array(
                    'name' => 'ujian',
                    'type' => 'raw',
                    'header' => 'N. Ujian',
                    'value' => 'CHtml::encode($data->ujian)',
                    'htmlOptions' => array('width' => ''),
                ),
                array(
                    'name' => 'N.A',
                    'type' => 'raw',
                    'header' => 'na',
                    'value' => 'CHtml::encode($data->na)',
                    'htmlOptions' => array('width' => ''),
                ),
                array(
                    'name' => 'nhuruf',
                    'type' => 'raw',
                    'header' => 'nhuruf',
                    'value' => 'CHtml::encode($data->nhuruf)',
                    'htmlOptions' => array('width' => ''),
                ),
            ),
        ));
    }
    
     public function actionLaporanDosen() {
        $model = new ProfilDosen();
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['ProfilDosen']))
            $model->attributes = $_POST['ProfilDosen'];

        $exportType = 'Excel5';
        $this->widget('ext.heart.export.EHeartExport', array(
            'title' => 'Laporan Dosen',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'grid_mode' => 'export',
            'exportType' => $exportType,
            'columns' => array(
                array(
                    'name' => 'kodeDosen',
                    'type' => 'raw',
                    'header' => 'Kode Dosen',
                    'value' => 'CHtml::encode($data->kodeDosen)',
                    'htmlOptions' => array('width' => '40px'),
                ),
                array(
                    'name' => 'nama',
                    'type' => 'raw',
                    'header' => 'Nama',
                    'value' => 'CHtml::encode($data->namaDosen)',
                    'htmlOptions' => array('width' => ''),
                ),
                 array(
                    'name' => 'telp',
                    'type' => 'raw',
                    'header' => 'Telepon',
                    'value' => 'CHtml::encode($data->telp)',
                    'htmlOptions' => array('width' => ''),
                ),
                array(
                    'name' => 'email',
                    'type' => 'raw',
                    'header' => 'Email',
                    'value' => 'CHtml::encode($data->email)',
                    'htmlOptions' => array('width' => ''),
                ),
                array(
                    'name' => 'alamat',
                    'type' => 'raw',
                    'header' => 'Alamat',
                    'value' => 'CHtml::encode($data->alamat)',
                    'htmlOptions' => array('width' => ''),
                ),
            ),
        ));
    }
    
    public function actionLaporanMahasiswa() {
        $model = new ProfilMahasiswa();
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['ProfilMahasiswa']))
            $model->attributes = $_POST['ProfilMahasiswa'];

        $exportType = 'Excel5';
        $this->widget('ext.heart.export.EHeartExport', array(
            'title' => 'Laporan Mahasiswa',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'grid_mode' => 'export',
            'exportType' => $exportType,
            'columns' => array(
                array(
                    'name' => 'nim',
                    'type' => 'raw',
                    'header' => 'NIM',
                    'value' => 'CHtml::encode($data->nim)',
                    'htmlOptions' => array('width' => '40px'),
                ),
                array(
                    'name' => 'nama',
                    'type' => 'raw',
                    'header' => 'Nama',
                    'value' => 'CHtml::encode($data->nama)',
                    'htmlOptions' => array('width' => ''),
                ),
                 array(
                    'name' => 'tlp',
                    'type' => 'raw',
                    'header' => 'Telepon',
                    'value' => 'CHtml::encode($data->tlp)',
                    'htmlOptions' => array('width' => ''),
                ),
                array(
                    'name' => 'kodeProdi',
                    'type' => 'raw',
                    'header' => 'Kode Prodi',
                    'value' => 'CHtml::encode($data->kodeProdi)',
                    'htmlOptions' => array('width' => ''),
                ),
            ),
        ));
    }
}
