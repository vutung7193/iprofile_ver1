<?php
/* @var $this EmployeeProjectController */
/* @var $model employeeProject */

$this->breadcrumbs=array(
	'Employee Projects'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create employeeProject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>