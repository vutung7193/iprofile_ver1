<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $now_address
 * @property integer $school_id
 * @property integer $major_id
 * @property string $image
 * @property string $mail
 * @property string $facebook
 * @property string $skype
 * @property string $phone
 * @property string $ident_number
 *
 * The followings are the available model relations:
 * @property Major $major
 * @property School $school
 * @property EmployeeAsset[] $employeeAssets
 * @property EmployeeCv[] $employeeCvs
 * @property EmployeeKtkl[] $employeeKtkls
 * @property EmployeeLeader[] $employeeLeaders
 * @property EmployeeProject[] $employeeProjects
 * @property EmployeeTrainning[] $employeeTrainnings
 * @property EmployeeWork[] $employeeWorks
 */
class employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    
     public $avatarUpload;
	public function tableName()
	{
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, school_id, major_id, mail, phone, status, birthdate, sex', 'required'),
			array('school_id, major_id, status','numerical', 'integerOnly'=>true),
			array('name, address, now_address, mail, facebook, skype, phone, ident_number, sex', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
                    array('avatarUpload', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => TRUE),
			array('id, name, address, now_address, school_id, major_id, logo, mail, facebook, skype, phone, ident_number,status, sex, birthdate', 'safe', 'on'=>'search'),
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
			'major' => array(self::BELONGS_TO, 'Major', 'major_id'),
			'school' => array(self::BELONGS_TO, 'School', 'school_id'),
			'employeeAssets' => array(self::HAS_MANY, 'EmployeeAsset', 'employee_id'),
			'employeeCvs' => array(self::HAS_MANY, 'EmployeeCv', 'employee_id'),
			'employeeKtkls' => array(self::HAS_MANY, 'EmployeeKtkl', 'employee_id'),
			'employeeLeaders' => array(self::HAS_MANY, 'EmployeeLeader', 'employee_id'),
			'employeeProjects' => array(self::HAS_MANY, 'EmployeeProject', 'employee_id'),
			'employeeTrainnings' => array(self::HAS_MANY, 'EmployeeTrainning', 'employee_id'),
			'employeeWorks' => array(self::HAS_MANY, 'EmployeeWork', 'employee_id'),
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
                    'birthdate' => 'BirthDate',
                    'sex' => 'Sex',
			'address' => 'Address',
			'now_address' => 'Current_Address',
			'school_id' => 'School',
			'major_id' => 'Major',
			'logo' => 'Image',
			'mail' => 'Mail',
			'facebook' => 'Facebook',
			'skype' => 'Skype',
			'phone' => 'Phone',
			'ident_number' => 'Ident Number',
                    'status' =>'Status',
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
                $criteria->compare('birthdate',$this->birthdate,true);
                $criteria->compare('sex',$this->sex,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('now_address',$this->now_address,true);
		$criteria->compare('school_id',$this->school_id);
		$criteria->compare('major_id',$this->major_id);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('skype',$this->skype,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('ident_number',$this->ident_number,true);
                	$criteria->compare('status',$this->status,true);

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
	 * @return employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
