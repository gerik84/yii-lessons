<?php
/**
 * Created by PhpStorm.
 * User: Valya
 * Date: 09.12.2016
 * Time: 15:42
@var $this yii\web\View */
namespace yii\grid;

use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii;
use yii\widgets\Breadcrumbs;

/*  @var $breadcrumbs array */
/*  @var $dataProvider yii\data\ActiveDataProvider */
/*  @var $model app\models\Project */

$this->params['breadcrumbs'] = $breadcrumbs;
?>
<div class="site-index">

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        'title',
                        'descript',
                        [
                            'class' => \yii\grid\ActionColumn::className(),
                            'urlCreator'=>function($action, $model, $key, $index){

                                return ($action=='view')?[$action,'id'=>$model['id'],'model_name'=>get_class($model)]
                                    :[$action,'id'=>$model['id'],'model_name'=>get_class($model)];
                            },
                            'template' => '{view} {delete}',

                        ],

                        // ...
                    ],
                ]);

                echo Html::a("Создать проект", ['//project/create'], [
                    'class' => 'btn btn-primary'

                ]);?>
            </div>

        </div>

    </div>
</div>