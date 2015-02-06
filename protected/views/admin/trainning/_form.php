<?php
/* @var $this TrainningController */
/* @var $model trainning */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trainning-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_trainning'); ?>
		<?php // echo $form->textField($model,'date_trainning'); 
                           $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'datepicker-month-year-menu',
      'model'=>$model,
                    'language' =>'vi',
'attribute'=>'date_trainning',
                 'value'=>$model->date_trainning,
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
		<?php echo $form->error($model,'date_trainning'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>3, 'cols'=>30)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php // echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); 
                   $this->widget('ext.widgets.xheditor.XHeditor', array(
            'model' => $model,
            'modelAttribute' => 'content',
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
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->