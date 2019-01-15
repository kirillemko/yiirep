<?php

use app\migrations\m181213_073839_users;
use yii\db\Migration;

/**
 * Class m181213_075719_users_add_authkey
 */
class m181213_075719_users_add_authkey extends Migration
{

    public function up()
    {
        $this->addColumn(
            'users',
            'auth_key',
            $this->string(255)
        );

        $this->alterColumn(
            'users',
            'pass',
            $this->string(255)
        );
    }

    public function down()
    {
        $this->alterColumn(
            'users',
            'pass',
            $this->string(32)
        );


        $this->dropColumn(
            'users',
            'auth_key'
        );
    }

}
