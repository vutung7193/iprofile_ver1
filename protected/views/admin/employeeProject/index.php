<?php
/* @var $this EmployeeProjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Projects',
);

$this->menu=array(
	array('label'=>'Thêm Mới', 'url'=>array('create')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Employee Projects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
