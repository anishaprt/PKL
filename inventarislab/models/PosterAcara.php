<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "poster_acara".
 *
 * @property int $id
 * @property string $gambar
 * @property string|null $keterangan
 * @property int|null $is_aktif
 */
class PosterAcara extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poster_acara';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gambar'], 'required'],
            [['is_aktif'], 'integer'],
            [['gambar'], 'string', 'max' => 100],
            [['keterangan'], 'string', 'max' => 145],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gambar' => 'Gambar',
            'keterangan' => 'Keterangan',
            'is_aktif' => 'Is Aktif',
        ];
    }
}
