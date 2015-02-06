<?php
/* @var $this EmployeeController */
/* @var $model employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
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
	$('#employee-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!--<h1>Manage Employees</h1>-->


<br>
<br>
<br>
<br>
<br>




<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
//$t = school::model()->find("id = {$data->major_id}");

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employee-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
            'birthdate',
            'sex',
		'address',
		'now_address',
            array(
                'name'=>'school_id',
                'value'=>'$data->school->name',
                
            ),
		//'school_id',
                //'major_id',
            
            array(
                'name'=>'major_id',
                'value'=>'$data->major->name',
                
            ),
//		'logo',
		'mail',
		'facebook',
		'skype',
		'phone',
		'ident_number',
            'status',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
