<?php

use yii\db\Migration;

/**
 * Handles the creation of table 'Employees'.
 */
class m210317_175951_create_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Employees', [
            'firstName' => $this->string(255)->notNull(),
            'lastName' => $this->string(255)->notNull(),
            'Company' => $this->string(255)->notNull(),
            'email' => $this->string(512),
            'phone' => $this->string(512)
        ]);
        $this->addPrimaryKey('PK_lastName', 'Employees', 'lastName');
        $this->addForeignKey('FK_Company', 'Employees', 'Company', 'Companies', 'Name');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_Company', 'Employees');
        $this->dropTable('Employees');

    }
}
