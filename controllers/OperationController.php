<?php

namespace app\controllers;


use app\models\Transaction;
use Yii;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

class OperationController extends  Controller
{
	public function beforeAction($action)
	{
		$this->enableCsrfValidation = false;
		return parent::beforeAction($action);
	}

	public function actionProcess()
	{
		$model = new Transaction();
		$model->invoice_id = Yii::$app->request->post('invoice_id');
		$model->bank_account = Yii::$app->request->post('bank_account');
		$model->amount = Yii::$app->request->post('amount');
		$model->creditCardNumber = Yii::$app->request->post('creditCardNumber');
		$model->dateStart = Yii::$app->request->post('dateStart');
		$model->dateExpiration = Yii::$app->request->post('dateExpiration');
		$model->ownerName = Yii::$app->request->post('ownerName');
		$model->cvc = Yii::$app->request->post('cvc');
		$model->status = 0;

		if ($model->validate()){
			$model->save();
			return 0;
		}

		Yii::$app->response->statusCode = 400;
		return new BadRequestHttpException(json_encode(Yii::$app->request->get()));
	}
}