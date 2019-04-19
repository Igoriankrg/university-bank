<?php

namespace app\controllers;


use app\models\Transaction;
use yii\web\Controller;

class OperationController extends  Controller
{
	public function actionProcess(){
		$model = new Transaction();
	}
}