<?php
/* @var $this EmployeeTrainningController */
/* @var $model employeeTrainning */

$this->breadcrumbs=array(
	'Employee Trainnings'=>array('index'),
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
	$('#employee-trainning-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employee Trainnings</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employee-trainning-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
//		'employee_id',
		array(
                'name'=>'employee_id',
                'value'=>'$data->employee->name',
                
            ),
//		
            	array(
                'name'=>'trainning_id',
                'value'=>'$data->trainning->name',
                
            ),
//		
//		'trainning_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
