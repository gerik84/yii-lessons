<?php
/**
 * Created by PhpStorm.
 * User: Valya
 * Date: 13.12.2016
 * Time: 15:44
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\Personal or app\models\Project */
/* @var $breabcrumbs array */

$this->params['breadcrumbs'] = $breadcrumbs;
?>
<div class="site-view">
    <h2><?= $model->title ?></h2>
    <div><?= $model->attributeLabels()['descript'] ?> : <span><?= $model->descript ?></span></div>


</div><!-- site-create -->