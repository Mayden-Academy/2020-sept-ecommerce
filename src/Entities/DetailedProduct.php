<?php


namespace RobotStores\Entities;


class DetailedProduct extends BaseProduct
{
    private ?string $image2;

    private ?string $image3;

    private CategoryInterface $category;

    private CharacterInterface $character;

    private int $categoryId;

    private int $characterId;

    private string $description;

    public function __construct()
    {
        $this->category = CategoryHydrator::getCategory($this->categoryId);
        $this->character = CharacterHydrator::getCharacter($this->characterId);
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }
}