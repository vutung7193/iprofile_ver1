<?php
/* @var $this EmployeeWorkController */
/* @var $model employeeWork */
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
		<?php echo $form->label($model,'employee_id'); ?>
		<?php echo $form->textField($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team_id'); ?>
		<?php echo $form->textField($model,'team_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position_id'); ?>
		<?php echo $form->textField($model,'position_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intership_signup'); ?>
		<?php echo $form->textField($model,'intership_signup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intership_start'); ?>
		<?php echo $form->textField($model,'intership_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intership_end'); ?>
		<?php echo $form->textField($model,'intership_end'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->