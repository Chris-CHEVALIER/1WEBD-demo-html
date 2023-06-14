<?php

class Pokemon
{
    // Attributs 
    private int $id;
    private int $number;
    private string $name;
    // private int $lifePoints;
    private string $type1;
    private string $type2;
    private string $image;
    private array $attacks;

    // Méthodes
    public function __construct(array $data)
    {
        if ($data["number"]) {
            $this->number = $data["number"];
        }
        if ($data["name"]) {
            $this->name = $data["name"];
        }
        if ($data["type1"]) {
            $this->type1 = $data["type1"];
        }
        if ($data["type2"]) {
            $this->type2 = $data["type2"];
        }
        if ($data["image"]) {
            $this->image = $data["image"];
        }
        if ($data["attacks"]) {
            $this->attacks = $data["attacks"];
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setNumber(int $number): self
    {
        if ($number > 0 && $number < 1009) {
            $this->number = $number;
        }
        return $this;
    }

    public function setName(string $name): bool // ou void
    {
        if ($name === "") {
            return false;
        }
        $this->name = $name;
        return false;
    }

    public function attack(): void
    {
        echo "$this->name attaque !";
    }

    public function getType1(): string
    {
        return $this->type1;
    }

    public function setType1(string $type1): self
    {
        $this->type1 = $type1;
        return $this;
    }

    public function getType2()
    {
        return $this->type2;
    }

    public function setType2($type2)
    {
        $this->type2 = $type2;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getAttacks()
    {
        return $this->attacks;
    }

    public function setAttacks($attacks)
    {
        $this->attacks = $attacks;

        return $this;
    }
}
