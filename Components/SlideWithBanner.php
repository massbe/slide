<?php


namespace Components;


class SlideWithBanner extends SlideAbstract
{
    private $bannerPath;

    public function __construct($name, $pathToImage, $description, $bannerPath)
    {
        parent::__construct($name, $pathToImage, $description);

        $this->bannerPath = $bannerPath;
        $this->arrayWithData[] = $bannerPath;
    }
}