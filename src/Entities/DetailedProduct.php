<?php


namespace RobotStores\Entities;


class DetailedProduct extends BaseProduct
{
    private string $image2;

    private string $image3;

    private CategoryInterface $category;

    private CharacterInterface $character;

    private int $categoryId;

    private int $characterId;

    private string $description;

    public function __construct($characterId, $character, $category, $categoryId)
    {
        $this->$character = CharacterHydrator::getCharacter($this->$characterId);
        $this->$category = CategoryHydrator::getCategory($this->$categoryId);
    }

    public function 
}