<?php

namespace App\Entity;

use App\Repository\AuthorRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @UniqueEntity(fields={"id"})
 * @ORM\Entity(repositoryClass=AuthorRepository::class)
 */
class Author
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
    private $familyName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $givenName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nationality;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $books = [];

//    /**
//     * @ORM\Column(type="date", nullable=true)
//     */
//    private $dateOfBirth;
//
//    /**
//     * @ORM\Column(type="date", nullable=true)
//     */
//    private $dateOfDeath;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFamilyName(): ?string
    {
        return $this->familyName;
    }

    public function setFamilyName(string $familyName): self
    {
        $this->familyName = $familyName;

        return $this;
    }

    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getBooks(): ?array
    {
        return $this->books;
    }

    public function setBooks(?array $books): self
    {
        $this->books = $books;

        return $this;
    }

//    public function getDateOfBirth(): ?\DateTimeInterface
//    {
//        return $this->dateOfBirth;
//    }
//
//    public function setDateOfBirth(?\DateTimeInterface $dateOfBirth): self
//    {
//        $this->dateOfBirth = $dateOfBirth;
//
//        return $this;
//    }
//
//    public function getDateOfDeath(): ?\DateTimeInterface
//    {
//        return $this->dateOfDeath;
//    }
//
//    public function setDateOfDeath(?\DateTimeInterface $dateOfDeath): self
//    {
//        $this->dateOfDeath = $dateOfDeath;
//
//        return $this;
//    }
}
