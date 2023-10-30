<?php

use yii\db\Migration;

/**
 * Class m231030_194208_tablaReservaAula
 */
class m231030_194208_tablaReservaAula extends Migration
{
    public function safeUp()
    {

            $this->createTable('reserva_aula', [
            'id' => $this->primaryKey(),
            'id_aula' => $this->integer(),
            'fh_desde' => $this->dateTime(),
            'fh_hasta' => $this->dateTime(),
            'observacion' => $this->text(256),
        ]);

        $this->addForeignKey('fk-reserva_aula-aula', 'reserva_aula', 'id_aula', 'aula', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-reserva_aula-aula', 'reserva_aula');

        $this->dropTable('reserva_aula');

        return true;
    }
}
