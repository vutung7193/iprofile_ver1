<?php
/* @var $this EmployeeController */
/* @var $model employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Thêm Mới', 'url'=>array('create')),
	array('label'=>'Chỉnh Sửa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Xóa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<!--<h1>View employee #<?php echo $model->id; ?></h1>-->

<?php 
$tung = school::model()->find("id = {$model->school_id}");
$t = major::model()->find("id = {$model->major_id}");
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
            'birthdate',
            'sex',
		'address',
		'now_address',
//		'school_id',
            array(
                'name' => 'school_id',
                'value'=> $tung->name,
                
            ),
//		'major_id',
             array(
                'name' => 'major_id',
                'value'=> $t->name,
                
            ),
		'logo',
		'mail',
		'facebook',
		'skype',
		'phone',
		'ident_number',
            'status',
	),
));


?>
