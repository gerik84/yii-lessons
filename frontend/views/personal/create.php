<?php
/**
 * Created by PhpStorm.
 * User: Valya
 * Date: 13.12.2016
 * Time: 16:12
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
/* @var $form ActiveForm */
/* @var $breadcrumbs array */

$this->params['breadcrumbs'] = $breadcrumbs;
?>
<div class="site-create">
    <?php $form = ActiveForm::begin(['id' => 'create-form',]);
        ?>

        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'last_name') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'professions')->dropDownList($model->ProfessionsList) ?>

        <div class="form-group">
            <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end();     ?>

</div><!-- site-create -->
