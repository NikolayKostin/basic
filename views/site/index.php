<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Carousel;

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;

	echo Carousel::widget([
    'items' => [
			// the item contains only the image
			'<img src="https://unsplash.it/1920/1080?random"/>',
			// equivalent to the above
			['content' => '<img src="https://unsplash.it/1920/1080"/>'],
			// the item contains both the image and the caption
			[
				'content' => '<img src="https://unsplash.it/1920/1080?random&blur=50"/>',
				'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
				'options' => ['class' => 'carousel-inner'],
			],
		]
	]);
	
?>