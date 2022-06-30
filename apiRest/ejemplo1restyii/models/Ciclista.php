<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciclista".
 *
 * @property int $dorsal
 * @property string $nombre
 * @property int|null $edad
 * @property string $nomequipo
 */
class Ciclista extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciclista';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dorsal', 'nombre', 'nomequipo'], 'required'],
            [['dorsal', 'edad'], 'integer'],
            [['nombre'], 'string', 'max' => 30],
            [['nomequipo'], 'string', 'max' => 25],
            [['dorsal'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dorsal' => 'Dorsal',
            'nombre' => 'Nombre',
            'edad' => 'Edad',
            'nomequipo' => 'Nombre del equipo',
        ];
    }
}
