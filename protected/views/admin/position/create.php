<?php
/* @var $this PositionController */
/* @var $model position */

$this->breadcrumbs=array(
	'Positions'=>array('index'),
	'Create',
);

$this->menu=array(
		array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create position</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>