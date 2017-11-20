<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

?>

	
<?php echo $this->renderPartial('_form', array('model'=>$model,'modelMhs'=>$modelMhs)); ?>
