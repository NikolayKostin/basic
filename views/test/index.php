<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Carousel;

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;

	echo Carousel::widget([
    'items' => [
		'<img src="https://unsplash.it/1920/1080?random"/>',
		['content' => '<img src="https://unsplash.it/1920/1080"/>'],
		[
			'content' => '<img src="https://unsplash.it/1920/1080?random&blur=50"/>',
			'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
			'options' => ['class' => 'carousel-inner'],
		],
	],
	'options' => ['class' => 'carousel slide', 'data-interval' => '5000'],
	'controls' => [
		'<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
		'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>',
	],
		
	]);
	
?>