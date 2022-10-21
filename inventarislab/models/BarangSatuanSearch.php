<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BarangSatuan;

/**
 * BarangSatuanSearch represents the model behind the search form of `app\models\BarangSatuan`.
 */
class BarangSatuanSearch extends BarangSatuan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'harga', 'id_kategori_barang_satuan', 'id_lab'], 'integer'],
            [['nama', 'serial_number_utama', 'serial_number_pelengkap', 'kondisi', 'tanggal_kepemilikan', 'keterangan'], 'safe'],
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
        $query = BarangSatuan::find();

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
            'harga' => $this->harga,
            'id_kategori_barang_satuan' => $this->id_kategori_barang_satuan,
            'id_lab' => $this->id_lab,
            'tanggal_kepemilikan' => $this->tanggal_kepemilikan,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'serial_number_utama', $this->serial_number_utama])
            ->andFilterWhere(['like', 'serial_number_pelengkap', $this->serial_number_pelengkap])
            ->andFilterWhere(['like', 'kondisi', $this->kondisi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
