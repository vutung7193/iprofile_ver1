<?php
/* @var $this TeamController */
/* @var $model team */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
		array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Thêm Mới', 'url'=>array('create')),
	array('label'=>'Xem Chi Tiết', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Update team <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>