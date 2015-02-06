<?php
/* @var $this EmployeeProjectController */
/* @var $model employeeProject */

$this->breadcrumbs=array(
	'Employee Projects'=>array('index'),
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
	$('#employee-project-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employee Projects</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employee-project-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
//		'employee_id',
//		'project_id',
           array(
                'name' => 'employee_id',
                'value' => '$data->employee->name',
                
            ),
		
		//'company_id',
            
            array(
                
                'name'=>'project_id',
                
               'value'=>'$data->project->name',
            ),
            'date_start',
		'date_end',
		'roles',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
