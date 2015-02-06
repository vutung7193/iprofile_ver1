<?php
/* @var $this NewsController */
/* @var $model news */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List news', 'url'=>array('index')),
	array('label'=>'Create news', 'url'=>array('create')),
	array('label'=>'View news', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage news', 'url'=>array('admin')),
);
?>

<h1>Update news <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>