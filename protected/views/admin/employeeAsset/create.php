<?php
/* @var $this EmployeeAssetController */
/* @var $model employeeAsset */

$this->breadcrumbs=array(
	'Employee Assets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create employeeAsset</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>