<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori_barang_satuan".
 *
 * @property int $id
 * @property string $nama
 *
 * @property BarangSatuan[] $barangSatuans
 */
class KategoriBarangSatuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_barang_satuan';
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
     * Gets query for [[BarangSatuans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangSatuans()
    {
        return $this->hasMany(BarangSatuan::className(), ['id_kategori_barang_satuan' => 'id']);
    }
}
