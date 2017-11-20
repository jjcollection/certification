<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
            $this->layout='mainDosen';
		$this->render('index');
	}
}