<?php

namespace app\controllers\admin;

use app\models\RkondisiBarangSatuan;
use app\models\RkondisiBarangSatuanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * RkondisiBarangSatuanController implements the CRUD actions for RkondisiBarangSatuan model.
 */
class RkondisiBarangSatuanController extends ControllerAdmin
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
     * Lists all RkondisiBarangSatuan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RkondisiBarangSatuanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionLaporan()
    {
        $this->layout = 'laporan';
        $lap = RkondisiBarangSatuan::find()->all();

        return $this->render('laporan', ['lap' => $lap]);
    }


    /**
     * Displays a single RkondisiBarangSatuan model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new RkondisiBarangSatuan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RkondisiBarangSatuan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                
                if( $model->save()){
                    $barang =  $this->findBarangSatuan($model->id_barang_satuan);
                    $kondisi = $this->findKondisiBarang($model->id_kondisi_barang);
                    $namaKondisi = $kondisi->nama;
                    $barang->kondisi = $namaKondisi;
                    
                    $barang->save();
                  return $this->redirect(['view', 'id' => $model->id]);
                }
                    
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RkondisiBarangSatuan model.
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
     * Deletes an existing RkondisiBarangSatuan model.
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
     * Finds the RkondisiBarangSatuan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return RkondisiBarangSatuan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RkondisiBarangSatuan::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findBarangSatuan($x)
    {
        $b1 = BarangSatuan::findOne(['id' => $x]);
        if ($b1 !== null) {
            return $b1;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findKondisiBarang($id)
    {
        if (($model = KondisiBarang::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
