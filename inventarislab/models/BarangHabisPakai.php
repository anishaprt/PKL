<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang_habis_pakai".
 *
 * @property int $id
 * @property string|null $nama
 * @property int $id_kategori_barang_habis_pakai
 * @property int|null $id_lab
 * @property int|null $harga
 * @property string|null $tanggal_kepemilikan
 * @property int|null $jumlah_awal
 * @property string|null $satuan
 * @property string|null $kondisi
 * @property string|null $keterangan
 *
 * @property KategoriBarangHabisPakai $kategoriBarangHabisPakai
 * @property Lab $lab
 * @property RpakaiBarangHabisPakai[] $rpakaiBarangHabisPakais
 */
class BarangHabisPakai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang_habis_pakai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori_barang_habis_pakai'], 'required'],
            [['id_kategori_barang_habis_pakai', 'id_lab', 'harga', 'jumlah_awal'], 'integer'],
            [['tanggal_kepemilikan'], 'safe'],
            [['nama', 'satuan', 'kondisi'], 'string', 'max' => 45],
            [['keterangan'], 'string', 'max' => 245],
            [['id_kategori_barang_habis_pakai'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriBarangHabisPakai::className(), 'targetAttribute' => ['id_kategori_barang_habis_pakai' => 'id']],
            [['id_lab'], 'exist', 'skipOnError' => true, 'targetClass' => Lab::className(), 'targetAttribute' => ['id_lab' => 'id']],
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
            'id_kategori_barang_habis_pakai' => 'Id Kategori Barang Habis Pakai',
            'id_lab' => 'Id Lab',
            'harga' => 'Harga',
            'tanggal_kepemilikan' => 'Tanggal Kepemilikan',
            'jumlah_awal' => 'Jumlah Awal',
            'satuan' => 'Satuan',
            'kondisi' => 'Kondisi',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[KategoriBarangHabisPakai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriBarangHabisPakai()
    {
        return $this->hasOne(KategoriBarangHabisPakai::className(), ['id' => 'id_kategori_barang_habis_pakai']);
    }

    /**
     * Gets query for [[Lab]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLab()
    {
        return $this->hasOne(Lab::className(), ['id' => 'id_lab']);
    }

    /**
     * Gets query for [[RpakaiBarangHabisPakais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRpakaiBarangHabisPakais()
    {
        return $this->hasMany(RpakaiBarangHabisPakai::className(), ['id_barang_habis_pakai' => 'id']);
    }
}
