<?php

use yii\db\Migration;

/**
 * Class m231030_174116_tablaProfesor
 */
class m231030_174116_tablaProfesor extends Migration
{
    public function safeUp()
    {
        $this->createTable('profesor', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
            'apellido' => $this->string(128)->notNull(),
            'mostrar' => $this->string(256)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('profesor');
        return true;
    }
}
