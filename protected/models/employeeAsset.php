<?php

/**
 * This is the model class for table "employee_asset".
 *
 * The followings are the available columns in table 'employee_asset':
 * @property integer $id
 * @property integer $employee_id
 * @property string $board_number
 * @property string $type
 * @property string $color
 * @property string $WAC
 *
 * The followings are the available model relations:
 * @property Employee $employee
 */
class employeeAsset extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee_asset';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id', 'required'),
			array('employee_id', 'numerical', 'integerOnly'=>true),
			array('board_number, type, color, WAC', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_id, board_number, type, color, WAC', 'safe', 'on'=>'search'),
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
			'board_number' => 'Board Number',
			'type' => 'Type',
			'color' => 'Color',
			'WAC' => 'Wac',
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
		$criteria->compare('board_number',$this->board_number,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('WAC',$this->WAC,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return employeeAsset the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
