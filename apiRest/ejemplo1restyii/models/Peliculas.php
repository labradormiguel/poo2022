<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peliculas".
 *
 * @property int $id
 * @property string|null $nombre
 * @property int|null $anno
 * @property int|null $duracion
 * @property string|null $clasificacion
 */
class Peliculas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peliculas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['anno', 'duracion'], 'integer'],
            [['clasificacion'], 'string'],
            [['nombre'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'anno' => 'Año',
            'duracion' => 'Duracion',
            'clasificacion' => 'Clasificacion',
        ];
    }
}
