<?php

namespace app\controllers;

use yii\rest\ActiveController;

class CiclistaController extends ActiveController {

    public $modelClass = 'app\models\Ciclista';

    public function actions() {
        $actions = parent::actions();

        // disable the "delete" and "create" actions
        //unset($actions['delete'], $actions['create']);
        // customize the data provider preparation with the "indexProvider" method
        $actions['index']['prepareDataProvider'] = [$this, 'indexProvider'];

        return $actions;
    }

    public function indexProvider($campo) {

        return new \yii\data\ActiveDataProvider([// se lo devuelvo como dataProvider (mas correcto)
            'query' => \app\models\Ciclista::find()
        ]);
    }

    public function actionEstadistica($campo, $id = 0) {
        if ($id == 0) {
            $query = \app\models\Ciclista::find()->select($campo);
        } else {
            $query = \app\models\Ciclista::find()->select($campo)->where(["id" => $id]);
        }

        return new \yii\data\ActiveDataProvider([
            'query' => $query,
            'pagination' => false
        ]);
    }

}
