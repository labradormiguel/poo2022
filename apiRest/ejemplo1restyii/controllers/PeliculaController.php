<?php

namespace app\controllers;

use yii\rest\ActiveController;

class PeliculaController extends ActiveController {

    public $modelClass = 'app\models\Peliculas';

    public function actions() {
        $actions = parent::actions();

        // disable the "delete" and "create" actions
        //unset($actions['delete'], $actions['create']);
        // customize the data provider preparation with the "indexProvider" method
        $actions['index']['prepareDataProvider'] = [$this, 'indexProvider'];

        return $actions;
    }

    public function indexProvider() {

        return new \yii\data\ActiveDataProvider([// se lo devuelvo como dataProvider (mas correcto)
            'query' => \app\models\Peliculas::find()
        ]);
    }

    public function actionEstadistica($campo, $id = 0) {
        if ($id == 0) {
            $query = \app\models\Peliculas::find()->select($campo);
        } else {
            $query = \app\models\Peliculas::find()->select($campo)->where(["id" => $id]);
        }

        return (new \yii\data\ActiveDataProvider([
                    'query' => $query,
                    'pagination' => false
        ]));
    }

}
