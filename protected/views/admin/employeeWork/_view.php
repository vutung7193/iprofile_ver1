<?php
/* @var $this EmployeeWorkController */
/* @var $data employeeWork */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_id')); ?>:</b>
	<?php echo CHtml::encode($data->team->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_id')); ?>:</b>
	<?php echo CHtml::encode($data->position->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intership_signup')); ?>:</b>
	<?php echo CHtml::encode($data->intership_signup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intership_start')); ?>:</b>
	<?php echo CHtml::encode($data->intership_start); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('intership_end')); ?>:</b>
	<?php echo CHtml::encode($data->intership_end); ?>
	<br />

	*/ ?>

</div>