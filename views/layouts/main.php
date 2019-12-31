<?php
    use \yii\bootstrap\NavBar;
    use \yii\bootstrap\Nav;
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yii2</title>
    <?php $this->head(); ?>
</head>
<body>
    <?php $this->beginBody(); ?>
    <?php
        NavBar::begin([
            'brandLabel' => 'Yii2',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-default'
            ]
        ]);
        $menu = [
            ['label' => 'Join', 'url' => ['/site/join']],
            ['label' => 'Login', 'url' => ['/site/login']]
        ];
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menu
        ]);
        NavBar::end();
    ?>
    <div class="container">
        <?= $content ?>
    </div>
    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>