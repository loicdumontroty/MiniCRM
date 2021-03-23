<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m210317_164819_create_user_table extends Migration
{

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /*
        $seeder = new \tebazil\yii2seeder\Seeder();
        $generator = $seeder->getGeneratorConfigurator();
        $faker = $generator->getFakerConfigurator();
*/
        $this->createTable('User', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'password' => $this->string(255)->notNull(),
            'auth_key' => $this->string(255)->notNull(),
            'access_token' => $this->string(255)->notNull(),
            'created_at' => $this->timestamp()
        ]);

        $this->insert('User', [
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => \Yii::$app->security->generatePasswordHash('password'),
            'auth_key' => \Yii::$app->security->generateRandomString(),
            'access_token' => \Yii::$app->security->generateRandomString(),
            'created_at' => date('Y-m-d H:i:s')
        ]);
/*
            $seeder->table('User')->columns([
            'id',
            'username'=> 'admin',
            'email' => 'admin@admin.com',
            'password' => \Yii::$app->security->generatePasswordHash('admin'),
                'auth_key' => \Yii::$app->security->generateRandomString(),
                'access_token' => \Yii::$app->security->generateRandomString(),
            'created_at' => date('Y-m-d H:i:s')
            ])->rowQuantity(30);
        $seeder->refill();
*/
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('User');
    }
}
