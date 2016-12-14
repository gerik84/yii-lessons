<?php
/**
 * Created by PhpStorm.
 * User: Valya
 * Date: 13.12.2016
 * Time: 13:44
 */

namespace frontend\controllers;


use app\models\Project;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class ProjectController extends ObjectController
{

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Project::find(),
            'pagination' => [
                'pageSize' => 3,],
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider,]);
    }

}