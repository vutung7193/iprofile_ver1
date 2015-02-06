<?php
/* @var $this MajorController */
/* @var $model major */

$this->breadcrumbs=array(
	'Majors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create major</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>