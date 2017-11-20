<?php

/**
 * This is the model class for table "tbl_profil_mahasiswa".
 *
 * The followings are the available columns in table 'tbl_profil_mahasiswa':
 * @property integer $nim
 * @property string $nama
 * @property string $tlp
 * @property string $kodeProdi
 * @property integer $idUser
 *
 * The followings are the available model relations:
 * @property Prodi $kodeProdi0
 * @property User $idUser0
 */
class ProfilMahasiswa extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_profil_mahasiswa';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nim', 'required'),
            array('nim, idUser', 'numerical', 'integerOnly' => true),
            array('nama', 'length', 'max' => 200),
            array('tlp', 'length', 'max' => 20),
            array('kodeProdi', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('nim, nama, tlp, kodeProdi, idUser', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'kodeProdi0' => array(self::BELONGS_TO, 'Prodi', 'kodeProdi'),
            'idUser0' => array(self::BELONGS_TO, 'User', 'idUser'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'nim' => 'Nim',
            'nama' => 'Nama',
            'tlp' => 'Tlp',
            'kodeProdi' => 'Kode Prodi',
            'idUser' => 'Id User',
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
        } else {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('nim', $this->nim);
        $criteria->compare('nama', $this->nama, true);
        $criteria->compare('tlp', $this->tlp, true);
        $criteria->compare('kodeProdi', $this->kodeProdi, true);
        $criteria->compare('idUser', $this->idUser);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ProfilMahasiswa the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
