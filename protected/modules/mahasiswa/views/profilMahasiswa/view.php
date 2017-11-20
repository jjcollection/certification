<?php

/* @var $this ProfilMahasiswaController */
/* @var $model ProfilMahasiswa */

$this->breadcrumbs = array(
    'Profil Mahasiswas' => array('index'),
    $model->nim,
);

$this->menu = array(
    array('label' => 'Ubah Profil Mahasiswa', 'url' => array('update', 'id' => $model->nim)),
    array('label' => 'Kelola Profil Mahasiswa', 'url' => array('admin')),
);
?>

<?php

$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'nim',
        'nama',
        'tlp',
        array(
            'name' => 'Prodi',
            'type' => 'raw',
            'value' => $model->kodeProdi0->namaProdi,
        ),
    ),
));
?>
