<?php
/* @var $this CompanyController */
/* @var $model company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Create company</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>