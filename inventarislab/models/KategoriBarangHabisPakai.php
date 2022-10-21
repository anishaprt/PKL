<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori_barang_habis_pakai".
 *
 * @property int $id
 * @property string $nama
 *
 * @property BarangHabisPakai[] $barangHabisPakais
 */
class KategoriBarangHabisPakai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_barang_habis_pakai';
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
     * Gets query for [[BarangHabisPakais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangHabisPakais()
    {
        return $this->hasMany(BarangHabisPakai::className(), ['id_kategori_barang_habis_pakai' => 'id']);
    }
}
