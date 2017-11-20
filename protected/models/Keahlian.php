<?php

/**
 * This is the model class for table "tbl_keahlian".
 *
 * The followings are the available columns in table 'tbl_keahlian':
 * @property integer $idKeahlian
 * @property string $namaKeahlian
 *
 * The followings are the available model relations:
 * @property Pelaksanaan[] $pelaksanaans
 */
class Keahlian extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_keahlian';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('namaKeahlian', 'length', 'max' => 200),
            /*
              //Example username
              array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u',
              'message'=>'Username can contain only alphanumeric
              characters and hyphens(-).'),
              array('username','unique'),
             */
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idKeahlian, namaKeahlian', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'absensis' => array(self::HAS_MANY, 'Absensi', 'idPelaksanaan'),
            'idKeahlian0' => array(self::BELONGS_TO, 'Keahlian', 'idKeahlian'),
            'idPeriode0' => array(self::BELONGS_TO, 'PeriodePelaksanaan', 'idPeriode'),
            'idPengajar0' => array(self::BELONGS_TO, 'ProfilDosen', 'idPengajar'),
            'pendaftarans' => array(self::HAS_MANY, 'Pendaftaran', 'idPelaksanaan'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idKeahlian' => 'Id Keahlian',
            'namaKeahlian' => 'Nama Keahlian',
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

        $criteria->compare('idKeahlian', $this->idKeahlian);
        $criteria->compare('namaKeahlian', $this->namaKeahlian, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Keahlian the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function beforeSave() {
        $userId = 0;
        if (null != Yii::app()->user->id)
            $userId = (int) Yii::app()->user->id;

        if ($this->isNewRecord) {
            
        } else {
            
        }


        return parent::beforeSave();
    }

    public function beforeDelete() {
        $userId = 0;
        if (null != Yii::app()->user->id)
            $userId = (int) Yii::app()->user->id;

        return false;
    }

    public function afterFind() {

        parent::afterFind();
    }

    public function defaultScope() {
        /*
          //Example Scope
          return array(
          'condition'=>"deleted IS NULL ",
          'order'=>'create_time DESC',
          'limit'=>5,
          );
         */
        $scope = array();


        return $scope;
    }

}
