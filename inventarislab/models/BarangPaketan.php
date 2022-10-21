<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang_paketan".
 *
 * @property int $id
 * @property string $nomor
 * @property int $id_barang_paket_jenis
 * @property int $id_lab
 * @property int|null $harga
 * @property string|null $kondisi
 * @property string|null $tanggal_kepemilikan
 * @property string|null $keterangan
 *
 * @property BarangPaketJenis $barangPaketJenis
 * @property Lab $lab
 * @property RkondisiBarangPaketan[] $rkondisiBarangPaketans
 */
class BarangPaketan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang_paketan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor', 'id_barang_paket_jenis', 'id_lab'], 'required'],
            [['id_barang_paket_jenis', 'id_lab', 'harga'], 'integer'],
            [['tanggal_kepemilikan'], 'safe'],
            [['nomor', 'kondisi'], 'string', 'max' => 45],
            [['keterangan'], 'string', 'max' => 245],
            [['id_barang_paket_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => BarangPaketJenis::className(), 'targetAttribute' => ['id_barang_paket_jenis' => 'id']],
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
            'nama_barang' => 'Nama',
            'nomor' => 'Nomor',
            'id_barang_paket_jenis' => 'Id Barang Paket Jenis',
            'id_lab' => 'Id Lab',
            'harga' => 'Harga',
            'kondisi' => 'Kondisi',
            'tanggal_kepemilikan' => 'Tanggal Kepemilikan',
            'keterangan' => 'Keterangan',
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
     * Gets query for [[RkondisiBarangPaketans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRkondisiBarangPaketans()
    {
        return $this->hasMany(RkondisiBarangPaketan::className(), ['id_barang_paketan' => 'id']);
    }
}
