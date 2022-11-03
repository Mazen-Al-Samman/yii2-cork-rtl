<?php

/** @var View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Html;
use yii\web\View;

$actionName = Yii::$app->controller->action->id;
AppAsset::register($this);
$this->registerJs("App.init();");
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <main role="main" class="flex-shrink-0">
        <div class="">
            <?= Alert::widget() ?>
            <?= !in_array($actionName, ['login', 'signup', 'error']) ? $this->render('header') : "" ?>
            <?= $content ?>
        </div>
    </main>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();