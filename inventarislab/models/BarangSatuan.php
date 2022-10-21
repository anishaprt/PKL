<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang_satuan".
 *
 * @property int $id
 * @property string $nama
 * @property string|null $serial_number_utama
 * @property string|null $serial_number_pelengkap
 * @property int|null $harga
 * @property int $id_kategori_barang_satuan
 * @property int $id_lab
 * @property string|null $kondisi
 * @property string|null $tanggal_kepemilikan
 * @property string|null $keterangan
 *
 * @property KategoriBarangSatuan $kategoriBarangSatuan
 * @property Lab $lab
 * @property RkondisiBarangSatuan[] $rkondisiBarangSatuans
 */
class BarangSatuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang_satuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'id_kategori_barang_satuan', 'id_lab'], 'required'],
            [['harga', 'id_kategori_barang_satuan', 'id_lab'], 'integer'],
            [['tanggal_kepemilikan'], 'safe'],
            [['nama'], 'string', 'max' => 75],
            [['serial_number_utama', 'kondisi'], 'string', 'max' => 45],
            [['serial_number_pelengkap'], 'string', 'max' => 145],
            [['keterangan'], 'string', 'max' => 245],
            [['id_kategori_barang_satuan'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriBarangSatuan::className(), 'targetAttribute' => ['id_kategori_barang_satuan' => 'id']],
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
            'serial_number_utama' => 'Serial Number Utama',
            'serial_number_pelengkap' => 'Serial Number Pelengkap',
            'harga' => 'Harga',
            'id_kategori_barang_satuan' => 'Id Kategori Barang Satuan',
            'id_lab' => 'Id Lab',
            'kondisi' => 'Kondisi',
            'tanggal_kepemilikan' => 'Tanggal Kepemilikan',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[KategoriBarangSatuan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriBarangSatuan()
    {
        return $this->hasOne(KategoriBarangSatuan::className(), ['id' => 'id_kategori_barang_satuan']);
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
     * Gets query for [[RkondisiBarangSatuans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRkondisiBarangSatuans()
    {
        return $this->hasMany(RkondisiBarangSatuan::className(), ['id_barang_satuan' => 'id']);
    }
}
