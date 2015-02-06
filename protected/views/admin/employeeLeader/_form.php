<?php
/* @var $this EmployeeLeaderController */
/* @var $model employeeLeader */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-leader-form',
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
		<?php echo $form->labelEx($model,'team_id'); ?>
		<?php // echo $form->textField($model,'team_id');
                            $list = CHtml::listData(team::model()->findAll(array('order' => 'name')),'id','name');
                echo CHtml::activeDropDownList( $model, 'team_id', $list,array('empty' => 'Select a Team'));
                
                ?>
		<?php echo $form->error($model,'team_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->