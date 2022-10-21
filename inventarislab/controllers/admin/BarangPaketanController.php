<?php

namespace app\controllers\admin;

use app\models\BarangPaketan;
use app\models\BarangPaketanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\data\Sort;
use app\models\RkondisiBarangPaketan;
/**
 * BarangPaketanController implements the CRUD actions for BarangPaketan model.
 */
class BarangPaketanController extends ControllerAdmin
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
     * Lists all BarangPaketan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BarangPaketanSearch();
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
        $lap = BarangPaketan::find()->orderBy([
            'id_barang_paket_jenis' => SORT_ASC,
          ])->all();

        return $this->render('laporan', ['lap' => $lap]);
    }

    /**
     * Displays a single BarangPaketan model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $riwayat = RkondisiBarangPaketan::find()->where(['id_barang_paketan' => $id])->all();
        
        // return $riwayat;
        return $this->render('view', [
            'model' => $model,
            'riwayat' => $riwayat
        ]);
    }

    /**
     * Creates a new BarangPaketan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BarangPaketan();

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
     * Updates an existing BarangPaketan model.
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
     * Deletes an existing BarangPaketan model.
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
     * Finds the BarangPaketan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return BarangPaketan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BarangPaketan::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
