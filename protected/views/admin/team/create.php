<?php
/* @var $this TeamController */
/* @var $model team */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	'Create',
);

$this->menu=array(
		array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create team</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>