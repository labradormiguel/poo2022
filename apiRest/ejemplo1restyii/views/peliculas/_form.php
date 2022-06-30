<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Peliculas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peliculas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anno')->textInput() ?>

    <?= $form->field($model, 'duracion')->textInput() ?>

    <?= $form->field($model, 'clasificacion')->dropDownList([ 'Apta para todos los públicos' => 'Apta para todos los públicos', 'No recomendada para menores de 7 años' => 'No recomendada para menores de 7 años', 'No recomendada para menores de 12 años' => 'No recomendada para menores de 12 años', 'No recomendada para menores de 18 años' => 'No recomendada para menores de 18 años', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Grabar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
