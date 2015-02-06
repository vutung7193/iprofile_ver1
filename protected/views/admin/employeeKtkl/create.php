<?php
/* @var $this EmployeeKtklController */
/* @var $model employeeKtkl */

$this->breadcrumbs=array(
	'Employee Ktkls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create employeeKtkl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>