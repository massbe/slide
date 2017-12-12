<?php


namespace Components;


class SlideWithVideo extends Slide
{
    private $videoLink;

    public function __construct($name, $pathToImage, $description, $videoLink)
    {
        parent::__construct($name, $pathToImage, $description);

        $this->videoLink = $videoLink;
    }

    public function getData(): array
    {
        return parent::getData()[] = $this->videoLink;
    }
}