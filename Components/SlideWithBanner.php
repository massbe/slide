<?php


namespace Components;


class SlideWithBanner extends Slide
{
    private $bannerPath;

    public function __construct($name, $pathToImage, $description, $bannerPath)
    {
        parent::__construct($name, $pathToImage, $description);

        $this->bannerPath = $bannerPath;
    }

    public function getData(): array
    {
        $array = parent::getData();
        $array[] = $this->bannerPath;

        return $array;
    }
}