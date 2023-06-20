<?php

class Pokemon
{
    // Attributs 
    private int $id;
    private int $number;
    private string $name;
    // private int $lifePoints;
    private int $id_type1;
    private ?int $id_type2;
    private string $image;
    private string $description;

    // Méthodes
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data) : void {
        /* if ($data["number"]) {
            $this->number = $data["number"];
        }
        if ($data["name"]) {
            $this->name = $data["name"];
        }
        if ($data["id_type1"]) {
            $this->id_type1 = $data["id_type1"];
        }
        if ($data["id_type2"]) {
            $this->id_type2 = $data["id_type2"];
        }
        if ($data["image"]) {
            $this->image = $data["image"];
        }
        if ($data["description"]) {
            $this->description = $data["description"];
        } */
        foreach ($data as $key => $value) {
           $method = "set".ucfirst($key); // setId, setNumber, setName, setId_type1 etc.
           if (method_exists($this, $method)) {
            $this->$method($value);
           }
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

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getId_type1(): int
    {
        return $this->id_type1;
    }

    public function setId_type1(int $id_type1)
    {
        $this->id_type1 = $id_type1;
        return $this;
    }

    public function getId_type2(): ?int
    {
        return $this->id_type2;
    }

    public function setId_type2(?int $id_type2)
    {
        $this->id_type2 = $id_type2;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
