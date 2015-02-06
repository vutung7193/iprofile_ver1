<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id
 * @property string $tieude
 * @property string $noidung
 * @property string $ngaytao
 * @property string $ngaysua
 * @property integer $order
 * @property string $tacgia
 */
class news extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tieude, noidung', 'required'),
			array('order', 'numerical', 'integerOnly'=>true),
			array('tieude', 'length', 'max'=>500),
			array('tacgia', 'length', 'max'=>100),
			array('ngaytao, ngaysua', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tieude, noidung, ngaytao, ngaysua, order, tacgia', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tieude' => 'Tieude',
			'noidung' => 'Noidung',
			'ngaytao' => 'Ngaytao',
			'ngaysua' => 'Ngaysua',
			'order' => 'Order',
			'tacgia' => 'Tacgia',
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
		$criteria->compare('tieude',$this->tieude,true);
		$criteria->compare('noidung',$this->noidung,true);
		$criteria->compare('ngaytao',$this->ngaytao,true);
		$criteria->compare('ngaysua',$this->ngaysua,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('tacgia',$this->tacgia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return news the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
