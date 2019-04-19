<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property int $id
 * @property int $invoice_id
 * @property string $bank_account
 * @property int $amount
 * @property string $creditCardNumber
 * @property string $dateStart
 * @property string $dateExpiration
 * @property string $ownerName
 * @property int $cvc
 * @property int $status
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'bank_account', 'amount', 'creditCardNumber', 'dateStart', 'dateExpiration', 'ownerName', 'cvc', 'status'], 'required'],
            [['invoice_id', 'amount', 'cvc', 'status'], 'integer'],
            [['bank_account', 'creditCardNumber', 'dateStart', 'dateExpiration', 'ownerName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'invoice_id' => 'Invoice ID',
            'bank_account' => 'Bank Account',
            'amount' => 'Amount',
            'creditCardNumber' => 'Credit Card Number',
            'dateStart' => 'Date Start',
            'dateExpiration' => 'Date Expiration',
            'ownerName' => 'Owner Name',
            'cvc' => 'Cvc',
            'status' => 'Status',
        ];
    }
}
