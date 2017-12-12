<?php


namespace Components;


class SlideAbstract
{
    private $name;
    private $pathToImage;
    private $description;
    protected $arrayWithData = [];

    public function __construct($name, $pathToImage, $description)
    {
        $this->name = $name;
        $this->pathToImage = $pathToImage;
        $this->description = $description;

        $this->arrayWithData[] = $name;
        $this->arrayWithData[] = $pathToImage;
        $this->arrayWithData[] = $description;
    }

    public function getData(): array
    {
        return $this->arrayWithData;
    }
}