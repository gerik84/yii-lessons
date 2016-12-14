<?php
/**
 * Created by PhpStorm.
 * User: Valya
 * Date: 13.12.2016
 * Time: 13:45
 */

namespace frontend\controllers;

use app\components\Tools;
use Yii;
use yii\helpers\Url;

abstract class ObjectController extends BaseController
{

    public function actionCreate()
    {
        //Tools::debug(Yii::$app->controller->id);
        $modelName = 'app\\models\\' . ucfirst(Yii::$app->controller->id);

        /* @var $model BaseModel */
        $model = new $modelName;

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                //Tools::debug([Url::previous()]);
                return $this->redirect(Url::to([Yii::$app->controller->id . '/index']));
            } else {
                Yii::$app->session->addFlash("danger", 'Что-то пошло не так2');
            }

        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionView()
    {
        if (!isset($_REQUEST['id'])) {
            Yii::$app->session->addFlash("danger", 'Что-то пошло не так');
            return $this->redirect(Url::to([Yii::$app->controller->id . '/index']));
        }
        $modelName = 'app\\models\\' . ucfirst(Yii::$app->controller->id);

        /** @var BaseModel $model */
        $model = new $modelName;
        $id = $_REQUEST['id'];
        $model = $model::findOne($id);

        return $this->render('view', ['model' => $model]);
    }

    public function actionDelete()
    {
        if (!isset($_REQUEST['id'])) {
            Yii::$app->session->addFlash("danger", 'Что-то пошло не так');
            return $this->redirect(Url::to([Yii::$app->controller->id . '/index']));
        }
        $modelName = 'app\\models\\' . ucfirst(Yii::$app->controller->id);

        /** @var BaseModel $model */
        $model = new $modelName;
        $id = $_REQUEST['id'];
        $model->deleteAll(['id' => $id]);
        return $this->redirect(Url::to([Yii::$app->controller->id . '/index']));
    }

}