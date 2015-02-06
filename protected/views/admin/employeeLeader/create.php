<?php
/* @var $this EmployeeLeaderController */
/* @var $model employeeLeader */

$this->breadcrumbs=array(
	'Employee Leaders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create employeeLeader</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>