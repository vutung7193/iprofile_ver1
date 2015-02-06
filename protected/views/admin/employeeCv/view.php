<?php
/* @var $this EmployeeCvController */
/* @var $model employeeCv */

$this->breadcrumbs=array(
	'Employee Cvs'=>array('index'),
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

<h1>View employeeCv #<?php echo $model->id; ?></h1>

<?php 
$tung = employee::model()->find("id = {$model->employee_id}");
$t = company::model()->find("id = {$model->company_id}");
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
//		'employee_id',
            array(
                'name'=>'employee_id',
                'value'=>$tung->name,
                
            ),
		'date_send',
		'date_transfer',
//		'company_id',
              array(
                'name'=>'company_id',
                'value'=>$t->name,
                
            ),
	),
)); ?>
