<?php
/* @var $this EmployeeWorkController */
/* @var $model employeeWork */

$this->breadcrumbs=array(
	'Employee Works'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Thêm Mới', 'url'=>array('create')),
	array('label'=>'Xem Chi Tiết', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Update employeeWork <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>