<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lab".
 *
 * @property int $id
 * @property string $nama
 * @property string|null $kepala_lab_nama
 * @property string|null $kepala_lab_nidn
 * @property string|null $keterangan
 */
class Lab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama', 'kepala_lab_nama'], 'string', 'max' => 45],
            [['kepala_lab_nidn'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'kepala_lab_nama' => 'Nama Kepala Lab ',
            'kepala_lab_nidn' => 'NIDN Kepala Lab',
            'keterangan' => 'Keterangan',
        ];
    }
}
