<?php
/* @var $this NewsController */
/* @var $model news */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tieude'); ?>
		<?php echo $form->textField($model,'tieude',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'tieude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noidung'); ?>
		<?php echo $form->textArea($model,'noidung',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'noidung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ngaytao'); ?>
		<?php echo $form->textField($model,'ngaytao'); ?>
		<?php echo $form->error($model,'ngaytao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ngaysua'); ?>
		<?php echo $form->textField($model,'ngaysua'); ?>
		<?php echo $form->error($model,'ngaysua'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tacgia'); ?>
		<?php echo $form->textField($model,'tacgia',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tacgia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->