<?php

use yii\db\Migration;

/**
 * Class m220910_233527_database_tables
 */
class m220910_233527_database_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->string(255)->notNull(),
            'image' => $this->string(2500)->defaultValue('uploads/products.png'),
        ]);

        $this->batchInsert('products', ['name', 'description', 'image'],
        [
            ['Gaming PC','PC Gamer con muchas lucesitas y adaptada para los juegos de ultima generación.','uploads/gamingpc.png'],
            ['Celular Nokia','Celular resistente adaptado para todo tipo de golpes.','uploads/nokia.jpg'],
            ['Playstation 5','Consola de última generación de Sony','uploads/ps5.jpg'],
            ['Steam Deck','Consola portátil creada por valve, juega tus juegos favoritos de steam donde quieras.','uploads/steamdeck.jpg'],
            ['Nintendo Switch','Consola híbrida creada por nintendo, gran portabilidad con una buena potencia de juego.','uploads/switch.png'],
            ['Volante para PC','Disfruta de todos tus juegos de carrera con un Volante de carreras para PC y consolas.','uploads/volante.png'],
            ['VR HEADSET','La realidad virtual ya está aquí, utiliza un Vr Set y disfruta de gran variedad de experiencias nuevas.','uploads/vrset.png'],
            ['Xbox Serie X','La última consola de Microsoft, con la mejor potencia y una amplia biblioteca de juegos gracias a su gamepass.','uploads/xbox.png'],
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220910_233527_database_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220910_233527_database_tables cannot be reverted.\n";

        return false;
    }
    */
}
