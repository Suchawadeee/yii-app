<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\room */

$this->title = $model->room_id;
$this->params['breadcrumbs'][] = ['label' => 'ห้องเก็บสารเคมี', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-danger box-solid">
    <div class="box-header">
        <h3 class="box-title"><?= Html::encode($this->title)?> </h3>
    </div>
    <div class="box-body">

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->room_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->room_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'room_id',
            'room_name',
        ],
    ]) ?>

</div>

</div>