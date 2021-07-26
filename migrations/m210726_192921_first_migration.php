<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m210726_192921_first_migration
 */
class m210726_192921_first_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('endereco', [
            'id' => Schema::TYPE_PK,
            'cep' => Schema::TYPE_STRING,
            'logradouro' => Schema::TYPE_STRING,
        ]);

        $this->insert('endereco', [
            'cep' => '83320280',
            'logradouro' => 'Rua Etiopia',
        ]);

        $this->insert('endereco', [
            'cep' => '81650325',
            'logradouro' => 'Avenida dos Estados',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('endereco');
    }
}
