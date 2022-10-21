<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BarangPaketan;

/**
 * BarangPaketanSearch represents the model behind the search form of `app\models\BarangPaketan`.
 */
class BarangPaketanSearch extends BarangPaketan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_barang_paket_jenis', 'id_lab', 'harga'], 'integer'],
            [['nomor', 'kondisi', 'tanggal_kepemilikan', 'keterangan'], 'safe'],
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
        $query = BarangPaketan::find();

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
            'id_barang_paket_jenis' => $this->id_barang_paket_jenis,
            'id_lab' => $this->id_lab,
            'harga' => $this->harga,
            'tanggal_kepemilikan' => $this->tanggal_kepemilikan,
        ]);

        $query->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'kondisi', $this->kondisi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
