<?php
/* @var $this EmployeeController */
/* @var $model employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
    
);
?>

<!--<h1>Create employee</h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>