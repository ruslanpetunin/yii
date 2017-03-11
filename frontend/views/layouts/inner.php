<?php
use frontend\assets\MainAsset;
use yii\helpers\Html;

MainAsset::register($this);
?>
<?php
  $this->beginPage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Realestate Bootstrap Theme </title>
<meta charset="<?= Yii::$app->charset?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?= Html::csrfMetaTags()?>
<?php
  $this->head();
?>
</head>

<body>
<?php
  $this->beginBody();
?>

<?php
 echo $this->render('//common/header');
?>

<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Buy</span>
    <h2>Buy</h2>
</div>
</div>

<div class="container">
	<div class="properties-listing spacer">

		<div class="row">
			<?=$content ?>
		</div>
	</div>
</div>

<?php
 echo $this->render('//common/footer');
?>

<?php
  $this->endBody();
?>
</body>
</html>
<?php
  $this->endPage();
?>

