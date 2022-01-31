<?php

namespace Models;

class Velo extends AbstractModel
{
    protected string $tableName = "velos";
    private string $name;
    private string $description;
    private string $image;
    private int $price;

    public function getId(): int
    {
        return $this->id;
    }

    // property name gs
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // property description gs
    public function getDescription(): string
    {
        return $this->description;
    }
    
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    // property image gs
    public function getImage(): string
    {
        return $this->image;
    }
    
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    // property price gs
    public function getPrice(): int
    {
        return $this->price;
    }
    
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }


    // METHODS
    
    public function save(Velo $velo){


    }
}


?>