<?php
/* @var $this EmployeeCvController */
/* @var $model employeeCv */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-cv-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php // echo $form->textField($model,'employee_id'); 
                            $list = CHtml::listData(employee::model()->findAll(array('order' => 'name')),'id','name');
                echo CHtml::activeDropDownList( $model, 'employee_id', $list,array('empty' => 'Select a Employee'));
                ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_send'); ?>
		<?php // echo $form->textField($model,'date_send'); 
                  $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'datepicker-month-year-menu',
      'model'=>$model,
                    'language' =>'vi',
'attribute'=>'date_send',
                 'value'=>$model->date_send,
//    'flat'=>true,//remove to hide the datepicker
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2000:2099',
        'minDate' => '2000-01-01',      // minimum date
        'maxDate' => '2099-12-31',      // maximum date
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));   
                ?>
		<?php echo $form->error($model,'date_send'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_transfer'); ?>
		<?php // echo $form->textField($model,'date_transfer');
                   $this->widget('zii.widgets.jui.CJuiDatePicker',array(
//    'name'=>'datepicker-month-year-menu',
      'model'=>$model,
                    'language' =>'vi',
'attribute'=>'date_transfer',
                 'value'=>$model->date_transfer,
//    'flat'=>true,//remove to hide the datepicker
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2000:2099',
        'minDate' => '2000-01-01',      // minimum date
        'maxDate' => '2099-12-31',      // maximum date
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));
                
                ?>
		<?php echo $form->error($model,'date_transfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php // echo $form->textField($model,'company_id');
                            $list = CHtml::listData(company::model()->findAll(array('order' => 'name')),'id','name');
                echo CHtml::activeDropDownList( $model, 'company_id', $list,array('empty' => 'Select a Company'));
                ?>
		<?php echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->