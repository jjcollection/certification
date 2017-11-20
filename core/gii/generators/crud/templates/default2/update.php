<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	'Update',
);\n";
?>

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data <?php echo $this->modelClass; ?>', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah <?php echo $this->modelClass; ?>', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil <?php echo $this->modelClass; ?>', 'url'=>array('view', 'id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<h3>Ubah <?php echo $this->modelClass."#"." <?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h3>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>