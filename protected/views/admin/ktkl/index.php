<?php
/* @var $this KtklController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ktkls',
);

$this->menu=array(
	array('label'=>'Thêm Mới', 'url'=>array('create')),
	array('label'=>'Quản Lý', 'url'=>array('admin')),
);
?>

<h1>Ktkls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
