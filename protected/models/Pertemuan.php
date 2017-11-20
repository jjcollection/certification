<?php

/**
 * This is the model class for table "tbl_pertemuan".
 *
 * The followings are the available columns in table 'tbl_pertemuan':
 * @property integer $idPertemuan
 * @property integer $idPelaksanaan
 * @property string $tanggal
 * @property string $waktu
 * @property string $materi
 *
 * The followings are the available model relations:
 * @property Absensi[] $absensis
 * @property Pelaksanaan $idPelaksanaan0
 */
class Pertemuan extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_pertemuan';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('idPelaksanaan', 'numerical', 'integerOnly' => true),
            array('tanggal, materi', 'safe'),
            array('idPertemuan, idPelaksanaan, tanggal, materi', 'safe', 'on' => 'search'),
        );
    }
    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'absensis' => array(self::HAS_MANY, 'Absensi', 'idPertemuan'),
            'idPelaksanaan0' => array(self::BELONGS_TO, 'Pelaksanaan', 'idPelaksanaan'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idPertemuan' => 'Id Pertemuan',
            'idPelaksanaan' => 'Pelaksanaan',
            'tanggal' => 'Tanggal',
            'materi' => 'Materi',
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

        $criteria = new CDbCriteria;

        $criteria->compare('idPertemuan', $this->idPertemuan);
        $criteria->compare('idPelaksanaan', $this->idPelaksanaan);
        $criteria->compare('tanggal', $this->tanggal, true);
        $criteria->compare('materi', $this->materi, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function searchPertemuan($idPendaftaran) {
        // @todo Please modify the following code to remove attributes that should not be searched.
        $idUser=Yii::app()->user->id;
        $criteria = new CDbCriteria;
        $criteria->join = "LEFT JOIN tbl_pelaksanaan pl ON t.idPelaksanaan=pl.idPelaksanaan
        LEFT JOIN tbl_pendaftaran pp ON t.idPelaksanaan=pp.idPelaksanaan
        WHERE pp.idPendaftaran=$idPendaftaran AND pp.idUser=$idUser";
       
        
//        $criteria->compare('pp.idUser', Yii::app()->user->id,fas);
//        $criteria->compare('pp.idPendaftaran', $idPertemuan);
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Pertemuan the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function primaryStatus() {
        $data = '';
        if (!empty($this->absensis)) {
            $counter = 0;
            foreach ($this->absensis as $absensinya) {
                if ($counter == 0) {
                    $data = $absensinya->statusKehadiran;
                } else {
                    // $data.=','.$absensinya->statusKehadiran;
                }
            }
        }
        return $data;
    }

}
