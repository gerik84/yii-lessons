<?php
/**
 * Created by PhpStorm.
 * User: Valya
 * Date: 13.12.2016
 * Time: 17:01
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
/* @var $breadcrumbs array */

$this->params['breadcrumbs'] = $breadcrumbs;
?>
<div class="site-view">
    <h2><?= $model->first_name ?></h2>
    <?php foreach ($model->attributes() as $attribute):
        if ($model->attributeLabels()[$attribute] != 'ID') {
            ?>
            <div><?= $model->attributeLabels()[$attribute] ?> : <span><?= $model->$attribute ?></span></div>

        <?php }
    endforeach; ?>


</div><!-- site-create -->