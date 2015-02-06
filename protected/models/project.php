<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property integer $id
 * @property string $name
 * @property string $describe
 * @property string $logo
 * @property string $date_start
 * @property string $date_end
 * @property double $money
 * @property string $link
 *
 * The followings are the available model relations:
 * @property EmployeeProject[] $employeeProjects
 */
class project extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
     public $avatarUpload;
	public function tableName()
	{
		return 'project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('money', 'numerical'),
			array('logo, link', 'length', 'max'=>500),
			array('describe, date_start, date_end', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, describe, logo, date_start, date_end, money, link', 'safe', 'on'=>'search'),
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
			'employeeProjects' => array(self::HAS_MANY, 'EmployeeProject', 'project_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'describe' => 'Describe',
			'logo' => 'Logo',
			'date_start' => 'Date Start',
			'date_end' => 'Date End',
			'money' => 'Money',
			'link' => 'Link',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('describe',$this->describe,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('money',$this->money);
		$criteria->compare('link',$this->link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
  protected function beforeSave()
        {
            $this->avatarUpload = CUploadedFile::getInstance($this, 'logo');
            if (isset($this->avatarUpload)) {
                $fileName     = $this->avatarUpload->name;
                $uploadFolder = Yii::getPathOfAlias('webroot') . DIRECTORY_SEPARATOR . 'Upload' . DIRECTORY_SEPARATOR . date('Y-m-d');
                if (!is_dir($uploadFolder)) { mkdir($uploadFolder, 0755, TRUE); }
                $uploadFile = $uploadFolder . DIRECTORY_SEPARATOR . $fileName;
                $this->avatarUpload->saveAs($uploadFile); //Upload file thong qua object CUploadedFile
                $this->logo = '/Upload/' . date('Y-m-d') . '/' . $fileName; //Lưu path vào csdl
            }
            return parent::beforeSave();
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return project the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
