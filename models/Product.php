<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $image
 */
class Product extends \yii\db\ActiveRecord
{
    // dejar publico donde se va guardar el archivo imagen
    public $imagefile;

    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        // Image almacenara la url de la imagen, y imagefile guardara la imagen en la carpeta uploads
        return [
            [['name', 'description'], 'required'],
            [['name', 'description'], 'string', 'max' => 40],
            [['imagefile'], 'file', 'extensions'=>'jpg , png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'imagefile' => 'Image',
        ];
    }
}
