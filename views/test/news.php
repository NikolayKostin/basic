<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Carousel;

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;

	echo Carousel::widget([
    'items' => [
			[
				'content' => '<img src="https://unsplash.it/1920/1080?random&blur=50"/>',
				'caption' => '<h3 style="color:white;">News</h3><p>This is the caption text</p>',
				'options' => ['class' => 'carousel-inner'],
			],
			['content' => '<img src="https://unsplash.it/1920/1080"/>'],
			[
				'content' => '<img src="https://unsplash.it/1920/1080?random&blur=50"/>',
				'caption' => '<h3>News</h3><p>This is the caption text</p>',
				'options' => ['class' => 'carousel-inner'],
			],
		]
	]);
	
?>