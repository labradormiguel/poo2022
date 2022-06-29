<?php

namespace app\controllers;

use app\models\Ciclista;
use app\models\CiclistaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CiclistasController implements the CRUD actions for Ciclista model.
 */
class CiclistasController extends Controller
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
     * Lists all Ciclista models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CiclistaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ciclista model.
     * @param int $dorsal Dorsal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($dorsal)
    {
        return $this->render('view', [
            'model' => $this->findModel($dorsal),
        ]);
    }

    /**
     * Creates a new Ciclista model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ciclista();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'dorsal' => $model->dorsal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ciclista model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $dorsal Dorsal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($dorsal)
    {
        $model = $this->findModel($dorsal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'dorsal' => $model->dorsal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ciclista model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $dorsal Dorsal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($dorsal)
    {
        $this->findModel($dorsal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ciclista model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $dorsal Dorsal
     * @return Ciclista the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($dorsal)
    {
        if (($model = Ciclista::findOne(['dorsal' => $dorsal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
