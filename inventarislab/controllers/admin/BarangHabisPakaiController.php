<?php

namespace app\controllers\admin;

use app\models\BarangHabisPakai;
use app\models\BarangHabisPakaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\data\Sort;
use app\models\RpakaiBarangHabisPakai;
;
/**
 * BarangHabisPakaiController implements the CRUD actions for BarangHabisPakai model.
 */
class BarangHabisPakaiController extends ControllerAdmin
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all BarangHabisPakai models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BarangHabisPakaiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionLaporan()
    {
        $this->layout = 'laporan';
        /* $sort = new Sort([
            'attributes' => [
                'id_barang_paket_jenis',                
            ],
        ]); */
        $lap = BarangHabisPakai::find()->orderBy([
            'id_kategori_barang_habis_pakai' => SORT_ASC,
          ])->all();

        return $this->render('laporan', ['lap' => $lap]);
    }
    /**
     * Displays a single BarangHabisPakai model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $riwayat = RpakaiBarangHabisPakai::find()->where(['id_barang_habis_pakai' => $id])->all();
        
        // return $riwayat;
        return $this->render('view', [
            'model' => $model,
            'riwayat' => $riwayat
        ]);
    }

    /**
     * Creates a new BarangHabisPakai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BarangHabisPakai();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BarangHabisPakai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BarangHabisPakai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BarangHabisPakai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return BarangHabisPakai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BarangHabisPakai::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
