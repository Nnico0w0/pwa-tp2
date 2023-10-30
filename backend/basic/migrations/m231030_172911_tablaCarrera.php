<?php

use yii\db\Migration;

/**
 * Class m231030_172911_tablaCarrera
 */
class m231030_172911_tablaCarrera extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('carrera', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
        ]);
    }


    public function safeDown()
    {
        $this->dropTable('carrera');

        return true;
    }

}
