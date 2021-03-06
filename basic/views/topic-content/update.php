<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TopicContent */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Topic Content',
]) . ' ' . $model->topic_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Topic Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->topic_id, 'url' => ['view', 'id' => $model->topic_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="topic-content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
