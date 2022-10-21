<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RpakaiBarangHabisPakai;

/**
 * RpakaiBarangHabisPakaiSearch represents the model behind the search form of `app\models\RpakaiBarangHabisPakai`.
 */
class RpakaiBarangHabisPakaiSearch extends RpakaiBarangHabisPakai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_barang_habis_pakai', 'jumlah_sisa'], 'integer'],
            [['tanggal', 'keterangan'], 'safe'],
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
        $query = RpakaiBarangHabisPakai::find();

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
            'id_barang_habis_pakai' => $this->id_barang_habis_pakai,
            'jumlah_sisa' => $this->jumlah_sisa,
        ]);

        $query->andFilterWhere(['like', 'tanggal', $this->tanggal])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
