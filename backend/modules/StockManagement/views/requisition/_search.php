<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\StockManagement\models\RequisitionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requisition-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'requisition_id') ?>

    <?= $form->field($model, 'description_re') ?>

    <?= $form->field($model, 'requisition_date') ?>

    <?= $form->field($model, 'userlogin_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
