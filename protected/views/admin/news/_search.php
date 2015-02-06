<?php
/* @var $this NewsController */
/* @var $model news */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tieude'); ?>
		<?php echo $form->textField($model,'tieude',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'noidung'); ?>
		<?php echo $form->textArea($model,'noidung',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ngaytao'); ?>
		<?php echo $form->textField($model,'ngaytao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ngaysua'); ?>
		<?php echo $form->textField($model,'ngaysua'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tacgia'); ?>
		<?php echo $form->textField($model,'tacgia',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->