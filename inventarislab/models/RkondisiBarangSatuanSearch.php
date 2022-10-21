<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RkondisiBarangSatuan;

/**
 * RkondisiBarangSatuanSearch represents the model behind the search form of `app\models\RkondisiBarangSatuan`.
 */
class RkondisiBarangSatuanSearch extends RkondisiBarangSatuan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_barang_satuan', 'id_kondisi_barang'], 'integer'],
            [['nama_barang', 'tanggal', 'keterangan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RkondisiBarangSatuan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'nama_barang' => $this->nama_barang,
            'tanggal' => $this->tanggal,
            'id_barang_satuan' => $this->id_barang_satuan,
            'id_kondisi_barang' => $this->id_kondisi_barang,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
