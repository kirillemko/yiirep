<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tasks */

$this->title = 'Просмотр задачи #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasks-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            'id',
            'task',
            [
                'attribute' => 'deadline',
                'value' => function( \app\models\Tasks $task){
                    return date('d.m.Y', $task->deadline);
                }
            ],
            [
                'attribute' => 'created_at',
                'value' => function( \app\models\Tasks $task){
                    return date('d.m.Y', $task->created_at);
                }
            ],
            [
                'attribute' => 'user_id',
                'value' => function( \app\models\Tasks $task){
                    return $task->user->login;
                }
            ],
        ],
    ]) ?>

</div>
