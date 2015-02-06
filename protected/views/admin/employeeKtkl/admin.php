<?php
/* @var $this EmployeeKtklController */
/* @var $model employeeKtkl */

$this->breadcrumbs=array(
	'Employee Ktkls'=>array('index'),
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
	$('#employee-ktkl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employee Awards</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
//$tung = employee::model()->find("id = {$model->employee_id}");

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employee-ktkl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
//		'employee_id',
              array(
                'name'=>'employee_id',
                'value'=>'$data->employee->name'
                
            ),
//		'ktkl_id,
            
             array(
                'name'=>'ktkl_id',
                'value'=>'$data->ktkl->name'
                
            ),
		'date',
		'note',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
