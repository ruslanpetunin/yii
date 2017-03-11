<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form=ActiveForm::begin();

?>

<?=$form->field($model, 'name');?>
<?=$form->field($model, 'email');?>

<?=Html::submitButton();?>

<?php
ActiveForm::end();
?>