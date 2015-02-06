<?php
/* @var $this EmployeeLeaderController */
/* @var $model employeeLeader */

$this->breadcrumbs=array(
	'Employee Leaders'=>array('index'),
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

<h1>Update employeeLeader <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>