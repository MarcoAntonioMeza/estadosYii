<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cotizador_radiacion".
 *
 * @property int $id
 * @property float $enero
 * @property float $febrero
 * @property float $marzo
 * @property float $abril
 * @property float $mayo
 * @property float $junio
 * @property float $julio
 * @property float $agosto
 * @property float $septiembre
 * @property float $octubre
 * @property float $noviembre
 * @property float $diciembre
 * @property int $estado_id
 *
 * @property CotizadorEstado $estado
 */
class Radiacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cotizador_radiacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre', 'estado_id'], 'required'],
            [['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'], 'number'],
            [['estado_id'], 'default', 'value' => null],
            [['estado_id'], 'integer'],
            [['estado_id'], 'exist', 'skipOnError' => true, 'targetClass' => CotizadorEstado::class, 'targetAttribute' => ['estado_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'enero' => 'Enero',
            'febrero' => 'Febrero',
            'marzo' => 'Marzo',
            'abril' => 'Abril',
            'mayo' => 'Mayo',
            'junio' => 'Junio',
            'julio' => 'Julio',
            'agosto' => 'Agosto',
            'septiembre' => 'Septiembre',
            'octubre' => 'Octubre',
            'noviembre' => 'Noviembre',
            'diciembre' => 'Diciembre',
            'estado_id' => 'Estado',
        ];
    }

    /**
     * Gets query for [[Estado]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEstado()
    {
        return $this->hasOne(CotizadorEstado::class, ['id' => 'estado_id']);
    }
}
