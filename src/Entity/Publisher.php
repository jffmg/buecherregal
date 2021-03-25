<?php

namespace App\Entity;

use App\Repository\PublisherRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @UniqueEntity(fields={"id"})
 * @ORM\Entity(repositoryClass=PublisherRepository::class)
 */
class Publisher
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
//    private $country;
//
//    /**
//     * @ORM\Column(type="string", length=255, nullable=true)
//     */
//    private $city;
//
//    public function getId(): ?int
//    {
//        return $this->id;
//    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

//    public function getCountry(): ?string
//    {
//        return $this->country;
//    }
//
//    public function setCountry(?string $country): self
//    {
//        $this->country = $country;
//
//        return $this;
//    }
//
//    public function getCity(): ?string
//    {
//        return $this->city;
//    }
//
//    public function setCity(?string $city): self
//    {
//        $this->city = $city;
//
//        return $this;
//    }
}
