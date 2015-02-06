<?php
/* @var $this EmployeeCvController */
/* @var $model employeeCv */

$this->breadcrumbs=array(
	'Employee Cvs'=>array('index'),
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
	$('#employee-cv-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employee Cvs</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 


$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employee-cv-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'employee_id',
            
            array(
                'name' => 'employee_id',
                'value' => '$data->employee->name',
                
            ),
		'date_send',
		'date_transfer',
		//'company_id',
            
            array(
                
                'name'=>'company_id',
                
               'value'=>'$data->company->name',
            ),
		array(
			'class'=>'CButtonColumn',
		),
	),
    
    
));

    



?>
