<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang_paket_isi".
 *
 * @property int $id
 * @property string $nama
 * @property int|null $jumlah
 * @property int|null $id_barang_paket_jenis
 *
 * @property BarangPaketJenis $barangPaketJenis
 */
class BarangPaketIsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang_paket_isi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['jumlah', 'id_barang_paket_jenis'], 'integer'],
            [['nama'], 'string', 'max' => 45],
            [['id_barang_paket_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => BarangPaketJenis::className(), 'targetAttribute' => ['id_barang_paket_jenis' => 'id']],
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
            'jumlah' => 'Jumlah',
            'id_barang_paket_jenis' => 'Id Barang Paket Jenis',
        ];
    }

    /**
     * Gets query for [[BarangPaketJenis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangPaketJenis()
    {
        return $this->hasOne(BarangPaketJenis::className(), ['id' => 'id_barang_paket_jenis']);
    }
}
