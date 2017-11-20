<?php

/**
 * This is the model class for table "tbl_pelaksanaan".
 *
 * The followings are the available columns in table 'tbl_pelaksanaan':
 * @property integer $idPelaksanaan
 * @property integer $idKeahlian
 * @property string $idPengajar
 * @property string $tglBuka
 * @property string $tglTutup
 * @property string $status
 * @property integer $idPeriode
 * @property integer $jmlPertemuan
 * @property string $tglPelaksanaan
 * @property string $waktu
 *
 * The followings are the available model relations:
 * @property Keahlian $idKeahlian0
 * @property PeriodePelaksanaan $idPeriode0
 * @property ProfilDosen $idPengajar0
 * @property Pendaftaran[] $pendaftarans
 * @property Pertemuan[] $pertemuans
 */
class Pelaksanaan extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_pelaksanaan';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('idKeahlian, idPeriode, jmlPertemuan', 'numerical', 'integerOnly' => true),
            array('idPengajar', 'length', 'max' => 11),
            array('status', 'length', 'max' => 50),
            array('waktu', 'length', 'max' => 50),
            array('tglBuka, tglTutup, tglPelaksanaan', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idPelaksanaan, idKeahlian, idPengajar, tglBuka, tglTutup, status, idPeriode, jmlPertemuan, tglPelaksanaan, waktu', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idKeahlian0' => array(self::BELONGS_TO, 'Keahlian', 'idKeahlian'),
            'idPeriode0' => array(self::BELONGS_TO, 'PeriodePelaksanaan', 'idPeriode'),
            'idPengajar0' => array(self::BELONGS_TO, 'ProfilDosen', 'idPengajar'),
            'pendaftarans' => array(self::HAS_MANY, 'Pendaftaran', 'idPelaksanaan'),
            'pertemuans' => array(self::HAS_MANY, 'Pertemuan', 'idPelaksanaan'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idPelaksanaan' => 'Id Pelaksanaan',
            'idKeahlian' => 'Id Keahlian',
            'idPengajar' => 'Id Pengajar',
            'tglBuka' => 'Tgl Buka',
            'tglTutup' => 'Tgl Tutup',
            'status' => 'Status',
            'idPeriode' => 'Id Periode',
            'jmlPertemuan' => 'Jml Pertemuan',
            'tglPelaksanaan' => 'Tgl Pelaksanaan',
            'waktu' => 'Waktu',
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
            $criteria = new CDbCriteria(array
                (
                'condition' => 'idPengajar=:idPengajar',
                'params' => array(':idPengajar' => Yii::app()->user->name),
            ));
        } else {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('idPelaksanaan', $this->idPelaksanaan);
        $criteria->compare('idKeahlian', $this->idKeahlian);
        $criteria->compare('idPengajar', $this->idPengajar, true);
        $criteria->compare('tglBuka', $this->tglBuka, true);
        $criteria->compare('tglTutup', $this->tglTutup, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('idPeriode', $this->idPeriode);
        $criteria->compare('jmlPertemuan', $this->jmlPertemuan);
        $criteria->compare('tglPelaksanaan', $this->tglPelaksanaan, true);
        $criteria->compare('waktu', $this->waktu, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Pelaksanaan the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getDosen() {
        return CHtml::listData(ProfilDosen::model()->findAll(), 'kodeDosen', 'namaDosen');
    }

    public function getKeahlian() {
        return CHtml::listData(Keahlian::model()->findAll(), 'idKeahlian', 'namaKeahlian');
    }

    public function getStatus() {
        return array('1' => 'Aktif', '0' => 'Tidak Aktif');
    }
    
     public function getJumlah() {
        return array('1' => '1', '2' => '2', '3' => '3','4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8');
    }
    
     public function getPelaksanaan() {
        return CHtml::listData(Pelaksanaan::model()->findAll(), 'idPelaksanaan', 'idPengajar');
    }

}
