<?php
/* @var $this SchoolController */
/* @var $model school */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Danh Sách', 'url'=>array('index')),
	array('label'=>'Thêm Mới', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#school-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Schools</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'school-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'short_name',
		'link',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
