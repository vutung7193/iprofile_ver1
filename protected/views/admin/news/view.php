<?php
/* @var $this NewsController */
/* @var $model news */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List news', 'url'=>array('index')),
	array('label'=>'Create news', 'url'=>array('create')),
	array('label'=>'Update news', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete news', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage news', 'url'=>array('admin')),
);
?>

<h1>View news #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tieude',
		'noidung',
		'ngaytao',
		'ngaysua',
		'order',
		'tacgia',
	),
)); ?>
