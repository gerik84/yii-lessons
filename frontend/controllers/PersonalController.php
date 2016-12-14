<?php
/**
 * Created by PhpStorm.
 * User: Valya
 * Date: 13.12.2016
 * Time: 13:47
 */

namespace frontend\controllers;


use app\models\Personal;
use yii\data\ActiveDataProvider;

class PersonalController extends ObjectController
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Personal::find(),
            'pagination' => [
                'pageSize' => 3,],
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider,]);
    }
}