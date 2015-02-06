<?php
/* @var $this EmployeeController */
/* @var $data employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php // echo CHtml::encode($data->logo); ?>
        <?php echo CHtml::image(Yii::app()->request->baseUrl . $data->logo ,'no image', array('style' => 'width = 50px; height: 50px'));?>
        <?php // echo CHtml::image(yii::app()->request->baseurl.$data->logo); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('birthdate')); ?>:</b>
	<?php echo CHtml::encode($data->birthdate); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />  
	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('now_address')); ?>:</b>
	<?php echo CHtml::encode($data->now_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_id')); ?>:</b>
	<?php // echo CHtml::encode($data->school_id); 

  

      echo CHtml::encode(school::model()->find("id = {$data->school_id}")->name);
      
     

        ?>
	<br />
        

	<b><?php echo CHtml::encode($data->getAttributeLabel('major_id')); ?>:</b>
	<?php // echo CHtml::encode($data->major_id);
        echo CHtml::encode(major::model()->find("id = {$data->major_id}")->name);
        ?>
	<br />

	

	
	<b> <?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b> 
	<?php echo CHtml::encode($data->mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facebook')); ?>:</b>
	<?php echo CHtml::encode($data->facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skype')); ?>:</b>
	<?php echo CHtml::encode($data->skype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ident_number')); ?>:</b>
	<?php echo CHtml::encode($data->ident_number); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	 

</div>