<?php
/* @var $this EmployeeLeaderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Leaders',
);

$this->menu=array(
	array('label'=>'Create employeeLeader', 'url'=>array('create')),
	array('label'=>'Manage employeeLeader', 'url'=>array('admin')),
);
?>

<h1>Employee Leaders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
