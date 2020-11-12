<?php


namespace RobotStores\Entities;

use RobotStores\Interfaces\CategoryInterface;
use RobotStores\Interfaces\CharacterInterface;

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
        $this->category = \RobotStores\Hydrators\CategoryHydrator::getCategory($this->categoryId);
        $this->character = \RobotStores\Hydrators\CharacterHydrator::getCharacter($this->characterId);
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }

    public function getImage3(): ?string
    {
        return $this->image3;
    }

    public function getCategory(): CategoryInterface
    {
        return $this->category;
    }

    public function getCharacter(): CharacterInterface
    {
        return $this->character;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function getCharacterId(): int
    {
        return $this->characterId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}