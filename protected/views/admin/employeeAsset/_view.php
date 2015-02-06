<?php
/* @var $this EmployeeAssetController */
/* @var $data employeeAsset */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee->name); 
        
        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('board_number')); ?>:</b>
	<?php echo CHtml::encode($data->board_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WAC')); ?>:</b>
	<?php echo CHtml::encode($data->WAC); ?>
	<br />


</div>