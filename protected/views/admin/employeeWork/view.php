<?php
/* @var $this EmployeeWorkController */
/* @var $model employeeWork */

$this->breadcrumbs=array(
	'Employee Works'=>array('index'),
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

<h1>View employeeWork #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
//		'employee_id',
            array(
                'name'=>'employee_id',
                'value'=> employee::model()->find("id= {$model->employee_id}")->name,
                
            ),
//		'team_id',
                        array(
                'name'=>'team_id',
                'value'=> team::model()->find("id= {$model->team_id}")->name,
                
            ),
//		'position_id',
                        array(
                'name'=>'position_id',
                'value'=> position::model()->find("id= {$model->position_id}")->name,
                
            ),
//		'company_id',
                        array(
                'name'=>'company_id',
                'value'=> company::model()->find("id= {$model->company_id}")->name,
                
            ),
		'intership_signup',
		'intership_start',
		'intership_end',
	),
)); ?>
