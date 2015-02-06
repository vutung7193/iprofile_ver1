<?php
/* @var $this EmployeeCvController */
/* @var $model employeeCv */

$this->breadcrumbs=array(
	'Employee Cvs'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create employeeCv</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>