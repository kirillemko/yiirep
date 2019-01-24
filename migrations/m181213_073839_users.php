<?php

use yii\db\Migration;

/**
 * Class m181213_073839_users
 */
class m181213_073839_users extends Migration
{
    const USERS_TABLE = 'users';

    public function up()
    {
        $this->createTable(self::USERS_TABLE, [
            'id' => $this->primaryKey(),
            'login' => $this->string(255),
            'pass' => $this->string(100)
        ]);

        $this->insert(self::USERS_TABLE, [
            'login' => 'admin',
            'pass' => Yii::$app->security->generatePasswordHash('admin')
        ]);
    }

    public function down()
    {
        $this->dropTable(self::USERS_TABLE);
    }

}
