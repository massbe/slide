<?php
include_once ('vendor/autoload.php');

use Components\Slide;
use Components\SlideWithVideo;
use Components\SlideWithBanner;


$slide = new Slide("Slide", "Путь к картинке", "Описание слайда");
$slideWithVideo = new SlideWithVideo("Slide with video", "Путь к картинке", "Описание слайда", "Тут путь к видео");
$slideWithBanner = new SlideWithBanner("Slide with banner", "Путь к картинке", "Описание слайда", "Тут путь к баннеру");

var_dump($slide->getData());
var_dump($slideWithVideo->getData());
var_dump($slideWithBanner->getData());