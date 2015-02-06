<?php
/* @var $this EmployeeLeaderController */
/* @var $data employeeLeader */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_id')); ?>:</b>
	<?php //  echo CHtml::encode($data->team_id); 
        echo CHtml::encode(team::model()->find("id = {$data->team_id}")->name);
        ?>
	<br />


</div>