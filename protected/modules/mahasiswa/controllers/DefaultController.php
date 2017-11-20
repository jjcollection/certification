<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
            $this->layout='mainMahasiswa';
		$this->render('index');
	}
}