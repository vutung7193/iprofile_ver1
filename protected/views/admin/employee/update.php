<?php
/* @var $this EmployeeController */
/* @var $model employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List employee', 'url'=>array('index')),
	array('label'=>'Create employee', 'url'=>array('create')),
	array('label'=>'View employee', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage employee', 'url'=>array('admin')),
);
?>

<!--<h1>Update employee <?php echo $model->id; ?></h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>