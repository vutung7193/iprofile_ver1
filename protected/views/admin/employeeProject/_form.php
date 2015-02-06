<?php
/* @var $this EmployeeProjectController */
/* @var $model employeeProject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-project-form',
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
		<?php echo $form->labelEx($model,'project_id'); ?>
		<?php // echo $form->textField($model,'project_id'); 
                        $list = CHtml::listData(project::model()->findAll(array('order' => 'name')),'id','name');
                echo CHtml::activeDropDownList( $model, 'project_id', $list,array('empty' => 'Select a Project'));
                
                
                
                ?>
		<?php echo $form->error($model,'project_id'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'date_start'); ?>
		<?php // echo $form->textField($model,'date_send'); 
                  $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'datepicker-month-year-menu',
      'model'=>$model,
                    'language' =>'vi',
'attribute'=>'date_start',
                 'value'=>$model->date_start,
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
));    ?>
		<?php echo $form->error($model,'date_start'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'date_end'); ?>
		<?php // echo $form->textField($model,'date_send'); 
                   $this->widget('zii.widgets.jui.CJuiDatePicker',array(
//    'name'=>'datepicker-month-year-menu',
      'model'=>$model,
                    'language' =>'vi',
'attribute'=>'date_end',
                 'value'=>$model->date_end,
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
		<?php echo $form->error($model,'date_end'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'roles'); ?>
		<?php // echo $form->textArea($model,'roles',array('rows'=>6, 'cols'=>50)); 
                      $this->widget('ext.widgets.xheditor.XHeditor', array(
            'model' => $model,
            'modelAttribute' => 'roles',
            'config' => array(
                'id' => 'xheditor_1',
                'tools' => 'mfull', // mini, simple, mfull, full or from XHeditor::$_tools, tool names are case sensitive
                'skin' => 'default', // default, nostyle, o2007blue, o2007silver, vista
                'width' => '500px',
                'height' => '200px',
                //'loadCSS' => XHtml::cssUrl('editor.css'),
                'upImgUrl' => $this->createUrl('request/uploadFile'),
                'upImgExt' => 'jpg,jpeg,gif,png',
            ),
        ));
                ?>
		<?php echo $form->error($model,'roles'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->