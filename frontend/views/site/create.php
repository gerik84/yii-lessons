<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
/* @var $form ActiveForm */
?>
<div class="site-create">

    <?php $form = ActiveForm::begin(['id' => 'create-form',]); ?>

        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'last_name') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'professions')->dropDownList($model->ProfessionsList) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-create -->
