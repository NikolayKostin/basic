<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="jumbotron">
		<h1><?=$this->title;?></h1>
		<p>Страница о нас</p>
		<p>
			<a class="btn btn-primary btn-lg" href="<?= Yii::$app->homeUrl;?>" role="button">На главную</a>
		</p>
	</div>
</div>
