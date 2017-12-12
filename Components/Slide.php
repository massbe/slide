<?php
namespace Components;

class Slide
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
    }

    public function getData(): array
    {
        $this->arrayWithData[] = $this->name;
        $this->arrayWithData[] = $this->pathToImage;
        $this->arrayWithData[] = $this->description;

        return $this->arrayWithData;
    }
}