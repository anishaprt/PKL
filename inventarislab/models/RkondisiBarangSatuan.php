<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rkondisi_barang_satuan".
 *
 * @property int $id
 * @property string $tanggal
 * @property int $id_barang_satuan
 * @property int $id_kondisi_barang
 * @property string $keterangan
 *
 * @property BarangSatuan $barangSatuan
 * @property KondisiBarang $kondisiBarang
 */
class RkondisiBarangSatuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rkondisi_barang_satuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'tanggal', 'id_barang_satuan', 'id_kondisi_barang', 'keterangan'], 'required'],
            [['tanggal'], 'safe'],
            //[['id_barang_satuan', 'id_kondisi_barang'], 'integer'],
            [['keterangan'], 'string', 'max' => 245],
            //[['id_barang_satuan'], 'exist', 'skipOnError' => true, 'targetClass' => RkondisiBarangSatuan::className(), 'targetAttribute' => ['id_barang_satuan' => 'id']],
            //[['id_kondisi_barang'], 'exist', 'skipOnError' => true, 'targetClass' => KondisiBarang::className(), 'targetAttribute' => ['id_kondisi_barang' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_barang' => 'Nama',
            'tanggal' => 'Tanggal',
            'id_barang_satuan' => 'Id Barang Satuan',
            'id_kondisi_barang' => 'Id Kondisi Barang',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[BarangSatuan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangSatuan()
    {
        return $this->hasOne(BarangSatuan::className(), ['id' => 'id_barang_satuan']);
    }

    /**
     * Gets query for [[KondisiBarang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKondisiBarang()
    {
        return $this->hasOne(KondisiBarang::className(), ['id' => 'id_kondisi_barang']);
    }
}
