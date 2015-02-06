<?php
/* @var $this SchoolController */
/* @var $model school */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create school</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>