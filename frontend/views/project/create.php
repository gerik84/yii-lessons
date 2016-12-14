<?php
/**
 * Created by PhpStorm.
 * User: Valya
 * Date: 13.12.2016
 * Time: 14:39
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
/* @var $form ActiveForm */
/* @var $breadcrumbs array */

$this->params['breadcrumbs'] = $breabcrumbs;
?>
<div class="site-create">
    <?php $form = ActiveForm::begin(['id' => 'create-form',]);
        ?>

        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'descript') ?>
        <div class="form-group">
            <?= Html::submitButton('Создать', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end();?>

</div><!-- site-create -->
