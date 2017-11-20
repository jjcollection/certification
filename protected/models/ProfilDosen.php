<?php

/**
 * This is the model class for table "tbl_profil_dosen".
 *
 * The followings are the available columns in table 'tbl_profil_dosen':
 * @property string $kodeDosen
 * @property string $namaDosen
 * @property string $telp
 * @property string $email
 * @property string $alamat
 * @property integer $idUser
 *
 * The followings are the available model relations:
 * @property Pelaksanaan[] $pelaksanaans
 * @property User $idUser0
 */
class ProfilDosen extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_profil_dosen';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('kodeDosen,email', 'required'),
            array('idUser', 'numerical', 'integerOnly' => true),
            array('kodeDosen', 'length', 'max' => 11),
            array('namaDosen, email', 'length', 'max' => 200),
            array('telp', 'length', 'max' => 20),
            array('alamat', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('kodeDosen, namaDosen, telp, email, alamat, idUser', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'pelaksanaans' => array(self::HAS_MANY, 'Pelaksanaan', 'idPengajar'),
            'idUser0' => array(self::BELONGS_TO, 'User', 'idUser'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'kodeDosen' => 'Kode Dosen',
            'namaDosen' => 'Nama Dosen',
            'telp' => 'Telp',
            'email' => 'Email',
            'alamat' => 'Alamat',
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

        if (Yii::app()->user->getLevel() == 2) {
            $criteria = new CDbCriteria(array
                (
                'condition' => 'idUser=:idUser',
                'params' => array(':idUser' => Yii::app()->user->id),
            ));
        } else {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('kodeDosen', $this->kodeDosen, true);
        $criteria->compare('namaDosen', $this->namaDosen, true);
        $criteria->compare('telp', $this->telp, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('alamat', $this->alamat, true);
        $criteria->compare('idUser', $this->idUser);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ProfilDosen the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
