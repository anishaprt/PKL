<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "input_test".
 *
 * @property int $id
 * @property string $ket
 * @property float|null $flow
 * @property string|null $tgl
 * @property string|null $jam
 */
class InputTest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'input_test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ket'], 'required'],
            [['flow'], 'number'],
            [['tgl', 'jam'], 'safe'],
            [['ket'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ket' => 'Ket',
            'flow' => 'Flow',
            'tgl' => 'Tgl',
            'jam' => 'Jam',
        ];
    }
}
