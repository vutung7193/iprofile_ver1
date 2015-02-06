<?php
/* @var $this EmployeeCvController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Cvs',
);

$this->menu=array(
	array('label'=>'Thêm Mới', 'url'=>array('create')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Employee Cvs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
