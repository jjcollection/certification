<?php

/**
 * This is the model class for table "tbl_pendaftaran".
 *
 * The followings are the available columns in table 'tbl_pendaftaran':
 * @property integer $idPendaftaran
 * @property integer $idUser
 * @property integer $idPelaksanaan
 * @property string $tanggalDaftar
 *
 * The followings are the available model relations:
 * @property NilaiDetil[] $nilaiDetils
 * @property NilaiMaster[] $nilaiMasters
 * @property User $idUser0
 * @property Pelaksanaan $idPelaksanaan0
 */
class Pendaftaran extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_pendaftaran';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('tanggalDaftar', 'required'),
            array('idUser, idPelaksanaan', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idPendaftaran, idUser, idPelaksanaan, tanggalDaftar', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'nilaiDetils' => array(self::HAS_MANY, 'NilaiDetil', 'idPendaftaran'),
            'nilaiMasters' => array(self::HAS_MANY, 'NilaiMaster', 'idPendaftaran'),
            'idUser0' => array(self::BELONGS_TO, 'User', 'idUser'),
            'idPelaksanaan0' => array(self::BELONGS_TO, 'Pelaksanaan', 'idPelaksanaan'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idPendaftaran' => 'Id Pendaftaran',
            'idUser' => 'Id User',
            'idPelaksanaan' => 'Id Pelaksanaan',
            'tanggalDaftar' => 'Tanggal Daftar',
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
        if (Yii::app()->user->getLevel() == 3) {
            $criteria = new CDbCriteria(array
                (
                'condition' => 'idUser=:idUser',
                'params' => array(':idUser' => Yii::app()->user->id),
            ));
        }
        else{
            $criteria = new CDbCriteria;
        } 

        $criteria->compare('idPendaftaran', $this->idPendaftaran);
        $criteria->compare('idUser', $this->idUser);
        $criteria->compare('idPelaksanaan', $this->idPelaksanaan);
        $criteria->compare('tanggalDaftar', $this->tanggalDaftar, true);
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Pendaftaran the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getBulan() {
        return array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        );
    }

    public function getTahun() {
        return CHtml::listData(PeriodePelaksanaan::model()->findAll(), 'tahun', 'tahun');
    }

}
