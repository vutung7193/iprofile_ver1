<?php

/**
 * This is the model class for table "employee_work".
 *
 * The followings are the available columns in table 'employee_work':
 * @property integer $id
 * @property integer $employee_id
 * @property integer $team_id
 * @property integer $position_id
 * @property integer $company_id
 * @property string $intership_signup
 * @property string $intership_start
 * @property string $intership_end
 *
 * The followings are the available model relations:
 * @property Company $company
 * @property Employee $employee
 * @property Position $position
 * @property Team $team
 */
class employeeWork extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee_work';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, team_id, position_id, company_id', 'required'),
			array('employee_id, team_id, position_id, company_id', 'numerical', 'integerOnly'=>true),
			array('intership_signup, intership_start, intership_end', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_id, team_id, position_id, company_id, intership_signup, intership_start, intership_end', 'safe', 'on'=>'search'),
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
			'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'employee_id'),
			'position' => array(self::BELONGS_TO, 'Position', 'position_id'),
			'team' => array(self::BELONGS_TO, 'Team', 'team_id'),
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
			'team_id' => 'Team',
			'position_id' => 'Position',
			'company_id' => 'Company',
			'intership_signup' => 'Date Signup',
			'intership_start' => 'Date Start',
			'intership_end' => 'Date End',
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
		$criteria->compare('team_id',$this->team_id);
		$criteria->compare('position_id',$this->position_id);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('intership_signup',$this->intership_signup,true);
		$criteria->compare('intership_start',$this->intership_start,true);
		$criteria->compare('intership_end',$this->intership_end,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return employeeWork the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
