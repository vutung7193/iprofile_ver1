<?php
/* @var $this EmployeeController */
/* @var $model employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
      'htmlOptions'          => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'birthdate'); ?>
		<?php // echo $form->textField($model,'name',array('size'=>60,'maxlength'=>500)); 
//                 $this->widget('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker',array(
//                'language'=>'en',
//                'model'=>$model,                                // Model object
//                'attribute'=>'birthdate', // Attribute name
//                'mode'=>'date',                     // Use "time","date" or "datetime" (default)
//                'options'=>array(),                     // jquery plugin options
//                'htmlOptions'=>array('readonly'=>true) // HTML options
//        )); 
                   $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'datepicker-month-year-menu',
      'model'=>$model,
                    'language' =>'vi',
'attribute'=>'birthdate',
                 'value'=>$model->birthdate,
//    'flat'=>true,//remove to hide the datepicker
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'changeMonth'=>true,
        'changeYear'=>true,
       'yearRange'=>'1980:2020',
//        'minDate' => '2000-01-01',      // minimum date
//        'maxDate' => '2099-12-31',      // maximum date
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));
                ?>
		<?php echo $form->error($model,'birthdate'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php // echo $form->textField($model,'name',array('size'=>60,'maxlength'=>500));
                echo CHtml::activeDropDownList($model,'sex',array('Nam'=>'Nam','Nữ'=>'Nữ') );
                ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>30,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'now_address'); ?>
		<?php echo $form->textField($model,'now_address',array('size'=>30,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'now_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'schoolID'); ?>
		<?php //    echo $form->textField($model,'school_id');
                
                $schools = school::model()->findAll(
                 array('order' => 'name'));
 
// format models as $key=>$value with listData
$list = CHtml::listData($schools, 
                'id', 'name');
                echo CHtml::activeDropDownList( $model, 'school_id', 
             $list,
              array('empty' => 'Select a University'));

      
                ?>
		<?php echo $form->error($model,'school_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'majorId'); ?>
		<?php // echo $form->textField($model,'major_id');
                
//                  
//                $majors = major::model()->findAll(array('order' => 'name'));
 
// format models as $key=>$value with listData
                $list = CHtml::listData(major::model()->findAll(array('order' => 'name')),'id','name');
                echo CHtml::activeDropDownList( $model, 'major_id', $list,array('empty' => 'Select a Major'));
                
                
                
                ?>
		<?php echo $form->error($model,'major_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logo'); ?>
		<?php echo $form->fileField($model,'logo'); ?>
		<?php echo $form->error($model,'logo'); ?>
            <img src="../..<?php echo $model->logo ?>"/>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>30,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facebook'); ?>
		<?php echo $form->textField($model,'facebook',array('size'=>30,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skype'); ?>
		<?php echo $form->textField($model,'skype',array('size'=>30,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'skype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>30,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ident_number'); ?>
		<?php echo $form->textField($model,'ident_number',array('size'=>30,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'ident_number'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
            
            
		<?php // echo $form->textField($model,'status',array('size'=>60,'maxlength'=>500));
                 echo CHtml::activeDropDownList( $model, 'status', array('1'=>'working','0'=>'Off'),array('empty' => 'Select a Status'));
                ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->