<?php

/* @var $this \yii\web\View */
/* @var $content string */

//AppAsset::register($this);

use frontend\assets\CustomAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

CustomAsset::register($this);

   ?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>



          <?= $this->render(
            'headers.php'
        ) ?>
        <?= $content ?>



          <?= $this->render(
            'footers.php'
        ) ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

