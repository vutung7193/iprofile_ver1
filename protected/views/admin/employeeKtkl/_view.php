<?php
/* @var $this EmployeeKtklController */
/* @var $data employeeKtkl */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('ktkl_id')); ?>:</b>
	<?php // echo CHtml::encode($data->ktkl_id); 
         echo CHtml::encode(ktkl::model()->find("id = {$data->ktkl_id}")->name);
        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />


</div>