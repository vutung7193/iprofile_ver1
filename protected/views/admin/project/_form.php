<?php
/* @var $this ProjectController */
/* @var $model project */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
     'htmlOptions'          => array(
        'enctype' => 'multipart/form-data',
    ),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textArea($model,'name',array('rows'=>3, 'cols'=>30)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'logo'); ?>
		<?php // echo $form->textField($model,'logo',array('size'=>60,'maxlength'=>500)); 
                echo $form->fileField($model,'logo'); 
                ?>
		<?php echo $form->error($model,'logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_start'); ?>
		<?php // echo $form->textField($model,'date_start'); 
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
));
                ?>
		<?php echo $form->error($model,'date_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_end'); ?>
		<?php // echo $form->textField($model,'date_end');
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
//    'name'=>'datepicker-month-year-menu',
      'model'=>$model,
                    'language' =>'vi',
'attribute'=>'date_end',
                 'value'=>$model->date_end,
//    'flat'=>true,//remove to hide the datepicker
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'fold',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
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
		<?php echo $form->labelEx($model,'money'); ?>
		<?php echo $form->textField($model,'money'); ?>
		<?php echo $form->error($model,'money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>20,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'describe'); ?>
		<?php // echo $form->textArea($model,'describe',array('rows'=>6, 'cols'=>50));
                      $this->widget('ext.widgets.xheditor.XHeditor', array(
            'model' => $model,
            'modelAttribute' => 'describe',
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
		<?php echo $form->error($model,'describe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->