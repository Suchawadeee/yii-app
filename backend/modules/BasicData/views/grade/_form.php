<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\grade */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="ph-value-form">
<div class="row"> 
<div class="col-xs-6">

<div class="grade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grade_name')->textInput(['maxlength' => true]),
            $this->registerCss("
    div.required label.control-label:after {
    content: \" *\";
    color: red; }") ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('ยกเลิก', ['class' => 'reset btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
