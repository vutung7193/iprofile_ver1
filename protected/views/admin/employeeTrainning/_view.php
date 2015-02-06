<?php
/* @var $this EmployeeTrainningController */
/* @var $data employeeTrainning */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php // echo CHtml::encode($data->employee_id);
        echo CHtml::encode(employee::model()->find("id = {$data->employee_id}")->name);
        
        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trainning_id')); ?>:</b>
	<?php // echo CHtml::encode($data->trainning_id); 
        echo CHtml::encode(trainning::model()->find("id = {$data->trainning_id}")->name);
        
        ?>
	<br />


</div>