<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widjets\Breadcrumbs;
use yii\bootstrap\Modal;
use app\assets\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
	
	  <?php
			NavBar::begin([
				'brandLabel' => '<img width="50" src="http://localhost:8080/yii_kost/basic/web/img/logo.png">',
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar navbar-default navbar-fixed-top',
				],
			]);
			$menu = [
				['label' => 'Главная', 'url' => ['/test/index']],
				['label' => 'О нас', 'url' => ['/test/about']],
				['label' => 'Лента новостей', 'url' => ['/test/news']],
				['label' => 'Контакты', 'url' => ['#'], 'linkOptions' => ['data-toggle' => 'modal', 'data-target' => '#contacts']],
			];
			if (YII::$app->user->isGuest) {
				$menu[] = ['label' => 'Авторизация', 'url' => ['/test/login']];
			}
			else {
				$menu[] = ['label' => 'Панель управления', 'url' => ['/test/admin']];
				$menu[] = ['label' => 'Выход', 'url' => ['/test/logout']];
			}
			echo Nav::widget([
				'options' => ['class' => 'nav navbar-nav'],
					'items' => $menu,
				]);
			NavBar::end();
			Modal::begin([
				'header' => '<h2>Контактная информация</h2>',
				'id' => 'contacts',
				'footer'=> '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>',
			]);

			echo '<p>Email: office@megaoffice.com</p>';
			echo '<p>Phone: (812)999-88-88</p>';
			echo '<p>Fax: (812)999-88-88</p>';
			echo '<address>Address: St.Petersburg, Nevskiy dist.</address>';
			echo md5('qwerty');
			Modal::end();
		?>

    <div class="container">
	
		<?= $content; ?>

    </div>

    <footer class="blog-footer">
		<div class="container">
			<p class="pull-left">&copy; Учебное приложение <?= date('Y') ?></p>

			<p class="pull-right"><?= Yii::powered() ?></p>
		</div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>