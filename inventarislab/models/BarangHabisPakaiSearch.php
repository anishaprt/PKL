<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BarangHabisPakai;

/**
 * BarangHabisPakaiSearch represents the model behind the search form of `app\models\BarangHabisPakai`.
 */
class BarangHabisPakaiSearch extends BarangHabisPakai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_kategori_barang_habis_pakai', 'id_lab', 'harga', 'jumlah_awal'], 'integer'],
            [['nama', 'tanggal_kepemilikan', 'satuan', 'kondisi', 'keterangan'], 'safe'],
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
        $query = BarangHabisPakai::find();

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
            'id_kategori_barang_habis_pakai' => $this->id_kategori_barang_habis_pakai,
            'id_lab' => $this->id_lab,
            'harga' => $this->harga,
            'tanggal_kepemilikan' => $this->tanggal_kepemilikan,
            'jumlah_awal' => $this->jumlah_awal,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'satuan', $this->satuan])
            ->andFilterWhere(['like', 'kondisi', $this->kondisi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
