<?php

use yii\db\Migration;

/**
 * Class m181213_074942_tasks
 */
class m181213_074942_tasks extends Migration
{

    const TASKS_TABLE = 'tasks';

    public function up()
    {
        $this->createTable(self::TASKS_TABLE, [
            'id' => $this->primaryKey(),
            'tasks' => $this->text(),
            'deadline' => $this->integer(),
            'user_id' => $this->integer()
        ]);

        $this->addForeignKey(
            'tasks_users_fk',
            'tasks',
            'user_id',
            'users',
            'id'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'tasks_users_fk',
            'tasks'
        );


        $this->dropTable(self::TASKS_TABLE);

    }

}
