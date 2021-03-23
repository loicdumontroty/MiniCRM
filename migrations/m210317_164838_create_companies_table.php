<?php

use yii\db\Migration;

/**
 * Handles the creation of table 'Companies'.
 */
class m210317_164838_create_companies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Companies', [
            'Name' => $this->string(255)->notNull(),
            'Email' => $this->string(512),
            'Logo' => $this->string(200),
            'Website' => $this->string(512)
        ]);

        $this->addPrimaryKey('PK_Name', 'Companies', 'Name');

       }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Companies');
    }
}
