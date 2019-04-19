<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%account}}`.
 */
class m190419_095807_create_account_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('account', [
            'id' => $this->primaryKey(),
			'account' => $this->string()->notNull(),
			'sum' => $this->integer()->notNull(),
			'cvc' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('account');
    }
}
