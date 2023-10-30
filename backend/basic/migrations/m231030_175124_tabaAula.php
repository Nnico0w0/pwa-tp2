<?php

use yii\db\Migration;

/**
 * Class m231030_175124_tabaAula
 */
class m231030_175124_tabaAula extends Migration
{
    public function safeUp()
    {
        $this->createTable('aula', [
            'id' => $this->primaryKey(),
            'descripcion' => $this->string(128)->notNull(),
            'ubicacion' => $this->string(128)->notNull(),
            'cant_proyector' => $this->integer()->defaultValue(0),
            'aforo' => $this->integer()->defaultValue(0),
            'es_climatizada' => $this->boolean()->defaultValue(false),
        ]);
    }


    public function safeDown()
    {

        $this->dropTable('aula');


        return true;
    }
}
