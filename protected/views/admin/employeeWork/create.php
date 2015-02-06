<?php
/* @var $this EmployeeWorkController */
/* @var $model employeeWork */

$this->breadcrumbs=array(
	'Employee Works'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create employeeWork</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>