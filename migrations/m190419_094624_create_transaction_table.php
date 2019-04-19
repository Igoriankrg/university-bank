<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction}}`.
 */
class m190419_094624_create_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('transaction', [
            'id' => $this->primaryKey(),
			'invoice_id' => $this->integer()->notNull(),
			'bank_account' => $this->string()->notNull(),
			'amount' => $this->integer()->notNull(),
			'creditCardNumber' => $this->string()->notNull(),
			'dateStart' => $this->string()->notNull(),
			'dateExpiration' => $this->string()->notNull(),
			'ownerName' => $this->string()->notNull(),
			'cvc' => $this->integer()->notNull(),
			'status' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('transaction');
    }
}
