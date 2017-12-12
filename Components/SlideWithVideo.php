<?php


namespace Components;


class SlideWithVideo extends SlideAbstract
{
    private $videoLink;

    public function __construct($name, $pathToImage, $description, $videoLink)
    {
        parent::__construct($name, $pathToImage, $description);

        $this->videoLink = $videoLink;
        $this->arrayWithData[] = $videoLink;
    }
}