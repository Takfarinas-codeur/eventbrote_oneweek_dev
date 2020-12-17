<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass= "App\Repository\EventRepository")
 * @ORM\Table(name="events")
 */
class Event 
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startsAt;


    /**
     * @ORM\Column(type="integer", options={"default": 1})
     */
    private $capacity;

    /**
     * @ORM\Column(type="string", length=255, options={"default": "placeholder.jpg"})
     */
    private $imageFileName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStartsAt(): ?\DateTimeInterface
    {
        return $this->startsAt;
    }

    public function setStartsAt(\DateTimeInterface $startsAt): self
    {
        $this->startsAt = $startsAt;

        return $this;
    }
    /**
     * @return bool
     */
    public function isFree ():bool{
     return $this ->getPrice() ==0 || is_null ($this ->getPrice());
    }

    public function getCapacity():?int
    {
        return $this->capacity;
    }

    public function setCapacity(?int $capacity):self
    {
        $this->capacity = $capacity;

        return $this;
    }


  public function getImageFileName(): ?string
  {
      return $this->imageFileName;
  }

  public function setImageFileName(?string $imageFileName): self
  {
      $this->imageFileName = $imageFileName;

      return $this;
  }
    
}
