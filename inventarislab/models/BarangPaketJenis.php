<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang_paket_jenis".
 *
 * @property int $id
 * @property string $nama
 *
 * @property BarangPaketIsi[] $barangPaketIsis
 */
class BarangPaketJenis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang_paket_jenis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 45],
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
        ];
    }

    /**
     * Gets query for [[BarangPaketIsis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangPaketIsis()
    {
        return $this->hasMany(BarangPaketIsi::className(), ['id_barang_paket_jenis' => 'id']);
    }
}
