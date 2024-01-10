<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cotizador_estado".
 *
 * @property int $id
 * @property string $nombre
 * @property string $ciudad
 * @property float $latitud
 * @property float $longitud
 *
 * @property CotizadorRadiacion[] $cotizadorRadiacions
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cotizador_estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'ciudad', 'latitud', 'longitud'], 'required'],
            [['latitud', 'longitud'], 'number'],
            [['nombre'], 'string', 'max' => 50],
            [['ciudad'], 'string', 'max' => 80],
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
            'ciudad' => 'Ciudad',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
        ];
    }

    /**
     * Gets query for [[CotizadorRadiacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCotizadorRadiacions()
    {
        return $this->hasMany(CotizadorRadiacion::class, ['estado_id' => 'id']);
    }
}
