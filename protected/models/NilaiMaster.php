<?php

/**
 * This is the model class for table "tbl_nilai_master".
 *
 * The followings are the available columns in table 'tbl_nilai_master':
 * @property integer $idNilaiMaster
 * @property integer $idPendaftaran
 * @property string $tglPenilaian
 * @property double $absensi
 * @property double $tugas
 * @property double $ujian
 * @property double $na
 * @property integer $jml
 * @property string $nhuruf
 *
 * The followings are the available model relations:
 * @property Pendaftaran $idPendaftaran0
 */
class NilaiMaster extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public $nama,$namaKeahlian;
    public function tableName() {
        return 'tbl_nilai_master';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('idPendaftaran', 'required'),
            array('idPendaftaran, jml', 'numerical', 'integerOnly' => true),
            array('absensi, tugas, ujian, na', 'numerical'),
            array('nhuruf', 'length', 'max' => 1),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idNilaiMaster, idPendaftaran, tglPenilaian, absensi,nama,keahlian, tugas, ujian, na, jml, nhuruf', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idPendaftaran0' => array(self::BELONGS_TO, 'Pendaftaran', 'idPendaftaran'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idNilaiMaster' => 'Id Nilai Master',
            'idPendaftaran' => 'Id Pendaftaran',
            'absensi' => 'Absensi',
            'tugas' => 'Tugas',
            'ujian' => 'Ujian',
            'na' => 'N.A',
            'jml' => 'Jumlah',
            'nhuruf' => 'Index',
            'nama'=>'Nama',
            'tglPenilaian'=>'Tanggal Penilaian',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        if (Yii::app()->user->getLevel() == 2) {
            $criteria = new CDbCriteria;
            $criteria->select = 'NilaiMaster.*,tbl_profil_mahasiswa.*';
            $criteria->alias = 'NilaiMaster';
            $criteria->join = 'LEFT JOIN tbl_pendaftaran ON tbl_pendaftaran.idPendaftaran=NilaiMaster.idPendaftaran '
                    . 'LEFT JOIN tbl_pelaksanaan ON tbl_pelaksanaan.idPelaksanaan=tbl_pendaftaran.idPelaksanaan '
                    . 'LEFT JOIN tbl_profil_mahasiswa ON tbl_pendaftaran.idUser=tbl_profil_mahasiswa.idUser';
            $criteria->condition = 'tbl_pelaksanaan.idPengajar="' . Yii::app()->user->name . '"';
        }
        else if (Yii::app()->user->getLevel() == 1) {
            $criteria = new CDbCriteria;
            $criteria->select = 'NilaiMaster.*,tbl_profil_mahasiswa.*';
            $criteria->alias = 'NilaiMaster';
            $criteria->join = 'LEFT JOIN tbl_pendaftaran ON tbl_pendaftaran.idPendaftaran=NilaiMaster.idPendaftaran '
                    . 'LEFT JOIN tbl_pelaksanaan ON tbl_pelaksanaan.idPelaksanaan=tbl_pendaftaran.idPelaksanaan '
                    . 'LEFT JOIN tbl_profil_mahasiswa ON tbl_pendaftaran.idUser=tbl_profil_mahasiswa.idUser';
        }
        else if (Yii::app()->user->getLevel() == 3) {
             $criteria = new CDbCriteria(array
                (
                'condition' => 'tbl_profil_mahasiswa.idUser=:idUser',
                'params' => array(':idUser' => Yii::app()->user->id),
            ));
            $criteria->select = 'NilaiMaster.*,tbl_profil_mahasiswa.*,tbl_keahlian.namaKeahlian';
            $criteria->alias = 'NilaiMaster';
            $criteria->join = 'LEFT JOIN tbl_pendaftaran ON tbl_pendaftaran.idPendaftaran=NilaiMaster.idPendaftaran '
                    . 'LEFT JOIN tbl_pelaksanaan ON tbl_pelaksanaan.idPelaksanaan=tbl_pendaftaran.idPelaksanaan '
                    . 'LEFT JOIN tbl_profil_mahasiswa ON tbl_pendaftaran.idUser=tbl_profil_mahasiswa.idUser '
                    . 'LEFT JOIN tbl_keahlian ON tbl_pelaksanaan.idKeahlian=tbl_keahlian.idKeahlian';
        }

        $criteria->compare('idNilaiMaster', $this->idNilaiMaster);
        $criteria->compare('idPendaftaran', $this->idPendaftaran);
        $criteria->compare('tglPenilaian', $this->tglPenilaian, true);
        $criteria->compare('absensi', $this->absensi);
        $criteria->compare('tugas', $this->tugas);
        $criteria->compare('ujian', $this->ujian);
        $criteria->compare('na', $this->na);
        $criteria->compare('jml', $this->jml);
        $criteria->compare('nhuruf', $this->nhuruf, true);
        $criteria->compare('tbl_profil_mahasiswa.nama', $this->nama,true);
        $criteria->compare('tbl_keahlian.namaKeahlian', $this->namaKeahlian,true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return NilaiMaster the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function primaryStatus() {
        $data = '';
        
        if (!empty($this->idPendaftaran0->idUser0->profilMahasiswas->nama)) {
            $counter = 0;
            foreach ($this->idPendaftaran0->idUser0->profilMahasiswas->nama as $absensinya) {
                if ($counter == 0) {
                    $data = $absensinya->nama;
                } else {
                    // $data.=','.$absensinya->statusKehadiran;
                }
            }
        }
        return $data;
    }
    
    public function primaryNama($idUser) {
        $nama=Yii::app()->db->createCommand("select * from tbl_profil_mahasiswa where idUser=$idUser")->queryRow();
        return $nama['nama'];
    }

}
