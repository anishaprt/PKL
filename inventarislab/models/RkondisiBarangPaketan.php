<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rkondisi_barang_paketan".
 *
 * @property int $id
 * @property string $tanggal
 * @property int $id_barang_paketan
 * @property int $id_kondisi_barang
 * @property string $keterangan
 *
 * @property BarangPaketan $barangPaketan
 * @property KondisiBarang $kondisiBarang
 */
class RkondisiBarangPaketan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rkondisi_barang_paketan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_barang_paketan', 'keterangan'], 'required'],
            [['tanggal'], 'safe'],
            [['id_barang_paketan', 'id_kondisi_barang'], 'integer'],
            [['keterangan'], 'string', 'max' => 245],
            [['id_barang_paketan'], 'exist', 'skipOnError' => true, 'targetClass' => RkondisiBarangPaketan::className(), 'targetAttribute' => ['id_barang_paketan' => 'id']],
            [['id_kondisi_barang'], 'exist', 'skipOnError' => true, 'targetClass' => KondisiBarang::className(), 'targetAttribute' => ['id_kondisi_barang' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal' => 'Tanggal',
            'id_barang_paketan' => 'Id Barang Paketan',
            'id_kondisi_barang' => 'Id Kondisi Barang',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[BarangPaketan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangPaketan()
    {
        return $this->hasOne(BarangPaketan::className(), ['id' => 'id_barang_paketan']);
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
