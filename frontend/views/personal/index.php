<?php

namespace yii\grid;

use app\components\Tools;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii;
use yii\widgets\Breadcrumbs;

/*  @var $breadcrumbs array */
/*  @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\Personal */


$this->params['breadcrumbs'] = $breadcrumbs;
?>
<div class="site-index">

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <?php
               //Tools::debug($breadcrumbs);
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        'first_name',
                        'last_name',
                        'phone',
                        [
                            'attribute' => 'professions',
                            'value' => function($model){return $model->getProfessionsList()[$model->professions];}
                        ],
                        [
                            'class' => \yii\grid\ActionColumn::className(),
                            'template' => '{view} {delete}',

                        ],

                        // ...
                    ],
                ]);

                echo Html::a("Добавить", ['//personal/create'], [
                    'class' => 'btn btn-primary'

                ]);?>
</div>

</div>

</div>
</div>