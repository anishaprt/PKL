<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rpakai_barang_habis_pakai".
 *
 * @property int $id
 * @property int $id_barang_habis_pakai
 * @property string|null $tanggal
 * @property int|null $jumlah_sisa
 * @property string|null $keterangan
 *
 * @property BarangHabisPakai $barangHabisPakai
 */
class RpakaiBarangHabisPakai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpakai_barang_habis_pakai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang_habis_pakai'], 'required'],
            [['id_barang_habis_pakai', 'jumlah_sisa'], 'integer'],
            [['tanggal'], 'string', 'max' => 45],
            [['keterangan'], 'string', 'max' => 245],
            [['id_barang_habis_pakai'], 'exist', 'skipOnError' => true, 'targetClass' => RpakaiBarangHabisPakai::className(), 'targetAttribute' => ['id_barang_habis_pakai' => 'id']],
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
            'id_barang_habis_pakai' => 'Id Barang Habis Pakai',
            'tanggal' => 'Tanggal',
            'jumlah_sisa' => 'Jumlah Sisa',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[BarangHabisPakai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangHabisPakai()
    {
        return $this->hasOne(BarangHabisPakai::className(), ['id' => 'id_barang_habis_pakai']);
    }
}
