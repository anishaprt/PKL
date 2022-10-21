<?php

namespace app\controllers\admin;

use app\models\InputTest;
use app\models\InputTestSearch;
use DateTime;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * InputTestController implements the CRUD actions for InputTest model.
 */
class InputTestController extends ControllerAdmin
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
     * Lists all InputTest models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InputTestSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InputTest model.
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

    public function actionDatepick()
    {
        if ($this->request->isPost) 
        {                        
            $waktu = Yii::$app->request->post('waktu');
            return $this->render('datepick', ['waktu' => $waktu]); 
        }
        else
        {
            
            return $this->render('datepick');
        }
        
    }

    /**
     * Creates a new InputTest model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InputTest();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                // $d1 = DateTime::createFromFormat("d-m-Y", $model->tgl);
                // $model->tgl = $d1->format('Y-m-d');
                $model->tgl =\Abahlana\Helper\TimeFormat::toPhpTimeFormat($model->tgl);
                if ($model->save()){
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
     * Updates an existing InputTest model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model->tgl = \Abahlana\Helper\TimeFormat::toIndoTimeFormat($model->tgl);
        // $d1 = DateTime::createFromFormat("Y-m-d", $model->tgl);
        // $model->tgl = $d1->format('d-m-Y');

        if ($this->request->isPost && $model->load($this->request->post())){
            // $d1 = DateTime::createFromFormat("d-m-Y", $model->tgl);
            // $model->tgl = $d1->format('Y-m-d');
            $model->tgl =\Abahlana\Helper\TimeFormat::toPhpTimeFormat($model->tgl);
            if ($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InputTest model.
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
     * Finds the InputTest model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return InputTest the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = InputTest::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
