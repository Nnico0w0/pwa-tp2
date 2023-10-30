<?php

use yii\db\Migration;

/**
 * Class m231030_174405_tabaMateria
 */
class m231030_174405_tabaMateria extends Migration
{
    public function safeUp()
    {

        $this->createTable('materia', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
            'cant_alumnos' => $this->integer()->notNull()->defaultValue(5),
            'id_carrera' => $this->integer(),
            'id_profesor' => $this->integer(),
        ]);

        $this->addForeignKey('fk-materia-carrera', 'materia', 'id_carrera', 'carrera', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-materia-profesor', 'materia', 'id_profesor', 'profesor', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {

        $this->dropTable('materia');


        return true;
    }
}
