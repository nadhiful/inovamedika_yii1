<?php
/* @var $this ItemCategoryController */
/* @var $model ItemCategory */

$this->breadcrumbs=array(
	'Item Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ItemCategory', 'url'=>array('index')),
	array('label'=>'Create ItemCategory', 'url'=>array('create')),
	array('label'=>'View ItemCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ItemCategory', 'url'=>array('admin')),
);
?>

<h1>Update ItemCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>