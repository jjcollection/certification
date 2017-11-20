<?php

/**
 * This is the model class for table "tbl_nilai_detil".
 *
 * The followings are the available columns in table 'tbl_nilai_detil':
 * @property integer $idNilaiDetil
 * @property integer $idNilaiMaster
 * @property integer $absensi
 * @property integer $tugas
 * @property integer $ujian
 *
 * The followings are the available model relations:
 * @property NilaiMaster $idNilaiMaster0
 */
class NilaiDetil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_nilai_detil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idNilaiMaster, absensi, tugas, ujian', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idNilaiDetil, idNilaiMaster, absensi, tugas, ujian', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idNilaiMaster0' => array(self::BELONGS_TO, 'NilaiMaster', 'idNilaiMaster'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idNilaiDetil' => 'Id Nilai Detil',
			'idNilaiMaster' => 'Id Nilai Master',
			'absensi' => 'Absensi',
			'tugas' => 'Tugas',
			'ujian' => 'Ujian',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idNilaiDetil',$this->idNilaiDetil);
		$criteria->compare('idNilaiMaster',$this->idNilaiMaster);
		$criteria->compare('absensi',$this->absensi);
		$criteria->compare('tugas',$this->tugas);
		$criteria->compare('ujian',$this->ujian);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NilaiDetil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
