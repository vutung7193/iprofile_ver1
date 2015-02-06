<?php

/**
 * This is the model class for table "employee_ktkl".
 *
 * The followings are the available columns in table 'employee_ktkl':
 * @property integer $id
 * @property integer $employee_id
 * @property integer $ktkl_id
 * @property string $date
 * @property string $note
 *
 * The followings are the available model relations:
 * @property Ktkl $ktkl
 * @property Employee $employee
 */
class employeeKtkl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee_ktkl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, ktkl_id', 'required'),
			array('employee_id, ktkl_id', 'numerical', 'integerOnly'=>true),
			array('note', 'length', 'max'=>500),
			array('date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_id, ktkl_id, date, note', 'safe', 'on'=>'search'),
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
			'ktkl' => array(self::BELONGS_TO, 'Ktkl', 'ktkl_id'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'employee_id' => 'Employee',
			'ktkl_id' => 'Award',
			'date' => 'Date',
			'note' => 'Note',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('ktkl_id',$this->ktkl_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return employeeKtkl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
