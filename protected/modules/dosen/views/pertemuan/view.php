<?php

/* @var $this PertemuanController */
/* @var $model Pertemuan */

$this->breadcrumbs = array(
    'Pertemuans' => array('index'),
    $model->idPertemuan,
);

$this->menu = array(
    array('label' => 'Tambah Pertemuan', 'url' => array('create')),
    array('label' => 'Ubah Pertemuan', 'url' => array('update', 'id' => $model->idPertemuan)),
    array('label' => 'Hapus Pertemuan', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idPertemuan), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Kelola Pertemuan', 'url' => array('admin')),
);
?>



<?php

$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'tanggal',
//        array(
//            'name' => 'Kode Dosen',
//            'value' => $model->idPelaksanaan0->idPengajar,
//        ),
        array(
            'name' => 'Nama Dosen',
            'value' => $model->idPelaksanaan0->idPengajar0->namaDosen,
        ),
         array(
            'name' => 'Program Keahlian',
            'value' => $model->idPelaksanaan0->idKeahlian0->namaKeahlian,
        ),
         array(
            'name' => 'Waktu',
            'value' => $model->idPelaksanaan0->waktu    ,
        ),
        'materi',
    ),
));
?>
