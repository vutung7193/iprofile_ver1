<?php
/* @var $this EmployeeTrainningController */
/* @var $model employeeTrainning */

$this->breadcrumbs=array(
	'Employee Trainnings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Thêm Mới', 'url'=>array('create')),
	array('label'=>'Chỉnh Sửa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Xóa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>View employeeTrainning #<?php echo $model->id; ?></h1>

<?php 
$tung = employee::model()->find("id = {$model->employee_id}");
$t = trainning::model()->find("id = {$model->trainning_id}");

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
//		'employee_id',
            array(
                'name'=>'employee_id',
                'value'=>$tung->name,
                
            ),
             array(
                'name'=>'trainning_id',
                'value'=>$t->name,
                
            ),
//		'trainning_id',
	),
)); ?>
