<?php
/* @var $this KtklController */
/* @var $model ktkl */

$this->breadcrumbs=array(
	'Ktkls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create New Award</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>