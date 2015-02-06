<?php
/* @var $this NewsController */
/* @var $data news */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tieude')); ?>:</b>
	<?php echo CHtml::encode($data->tieude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noidung')); ?>:</b>
	<?php echo CHtml::encode($data->noidung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngaytao')); ?>:</b>
	<?php echo CHtml::encode($data->ngaytao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngaysua')); ?>:</b>
	<?php echo CHtml::encode($data->ngaysua); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tacgia')); ?>:</b>
	<?php echo CHtml::encode($data->tacgia); ?>
	<br />


</div>