<?php

namespace RobotStores\Entities;

class BaseProduct
{
    protected int $id;
    protected string $title;
    protected float $price;
    protected string $image;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}