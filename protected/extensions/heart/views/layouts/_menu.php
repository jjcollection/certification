<?php
$currController 	= Yii::app()->controller->id;
$currControllers	= explode('/', $currController);
$currAction			= Yii::app()->controller->action->id;
$currRoute 			= Yii::app()->controller->getRoute();
$currRoutes			= explode('/', $currRoute);

$menu=
	array(
		array('label'=>'Home', 'url'=>array('/site/index'), 'icon'=>'fa fa-home','active'=>($currController=='site' and $currAction=='index' )),
		array('label'=>'Pemesanan Baru', 'url'=>array('/PembelianGroup/create'), 'icon'=>'fa fa-gear','active'=>($currController=='site' and $currAction=='index' )),
		array('label'=>'Data Pemesanan', 'url'=>array('/Pembelian/index'), 'icon'=>'fa fa-cart','active'=>($currController=='site' and $currAction=='index' )),
		
	);	
?>	