<?php
/* @var $this ProjectController */
/* @var $model project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create project</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>