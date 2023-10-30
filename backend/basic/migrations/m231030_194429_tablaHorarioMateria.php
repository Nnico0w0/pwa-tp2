<?php

use yii\db\Migration;

/**
 * Class m231030_194429_tablaHorarioMateria
 */
class m231030_194429_tablaHorarioMateria extends Migration
{
    public function safeUp()
    {
        $this->createTable('horario_materia', [
            'id' => $this->primaryKey(),
            'id_materia' => $this->integer(),
            'id_reserva' => $this->integer(),
            'fh_desde' => $this->dateTime(),
            'fh_hasta' => $this->dateTime(),
        ]);

        $this->addForeignKey('fk-horario_materia-materia', 'horario_materia', 'id_materia', 'materia', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-horario_materia-reserva', 'horario_materia', 'id_reserva', 'reserva_aula', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-horario_materia-reserva', 'horario_materia');
        $this->dropForeignKey('fk-horario_materia-materia', 'horario_materia');

        $this->dropTable('horario_materia');
    }
}
