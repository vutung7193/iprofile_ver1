<?php
/* @var $this TrainningController */
/* @var $model trainning */

$this->breadcrumbs=array(
	'Trainnings'=>array('index'),
	'Create',
);

$this->menu=array(
		array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create trainning</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>