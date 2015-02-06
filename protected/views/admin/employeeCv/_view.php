<?php
/* @var $this EmployeeCvController */
/* @var $data employeeCv */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_send')); ?>:</b>
	<?php echo CHtml::encode($data->date_send); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->date_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php // echo CHtml::encode($data->company_id);
          echo CHtml::encode(company::model()->find("id = {$data->company_id}")->name);
        ?>
	<br />


</div>