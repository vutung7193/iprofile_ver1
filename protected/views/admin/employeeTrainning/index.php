<?php
/* @var $this EmployeeTrainningController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Trainnings',
);

$this->menu=array(
	array('label'=>'Thêm Mới', 'url'=>array('create')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Employee Trainnings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
