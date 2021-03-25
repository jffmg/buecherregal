<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @UniqueEntity(fields={"id"})
 * @ORM\Entity(repositoryClass=BookRepository::class)
 */
class Book
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Please provide a title.")
     * @Assert\Length(max=255, maxMessage="Max 255 characters")
     * @ORM\Column (type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column (type="integer", length=255, nullable=true)
     */
    private $authorId;

    /**
     * @Assert\NotBlank(message="Please provide a name.")
     * @Assert\Length(max=255, maxMessage="Max 255 characters")
     * @ORM\Column (type="string", length=255)
     */
    private $authorFamilyName;

    /**
     * @Assert\Length(max=255, maxMessage="Max 255 characters")
     * @ORM\Column (type="string", length=255)
     */
    private $authorGivenName;

    /**
     * * @Assert\Length(max=255, maxMessage="Max 255 characters")
     * @ORM\Column (type="string", length=255, nullable=true)
     */
    private $publisher;

    /**
     * @ORM\Column (type="integer", length=255, nullable=true)
     */
    private $publisherId;

//    private $translator;
//
//    private $titleOriginal;
//
//    private $language;
//
//    private $languageOriginal;
//
    /**
     * @ORM\Column (type="date", nullable=true)
     */
    private $datePublished;
//
//    private $dateAcquired;
//
//    private $isRead;
//
//    private $comment;
//
//    private $format;
//
//    // fiction, doc, utilitaire...
//    private $category;
//
//    private $genre;
//
//    private $isASeries;
//
//    private $volumeNumber;
//
//    private $pages;
//
//    private $isIllustrated;
//
//    private $artist;
//
//    private $collection;

    /**
     * @ORM\Column (type="datetime")
     */
    private $dateCreated;
//
//    /**
//     * @ORM\Column (type="datetime", nullable=true)
//     */
//private $dateModified;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthorFamilyName()
    {
        return $this->authorFamilyName;
    }

    /**
     * @param mixed $authorFamilyName
     */
    public function setAuthorFamilyName($authorFamilyName): void
    {
        $this->authorFamilyName = $authorFamilyName;
    }

    /**
     * @return mixed
     */
    public function getAuthorGivenName()
    {
        return $this->authorGivenName;
    }

    /**
     * @param mixed $authorGivenName
     */
    public function setAuthorGivenName($authorGivenName): void
    {
        $this->authorGivenName = $authorGivenName;
    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param mixed $authorId
     */
    public function setAuthorId($authorId): void
    {
        $this->authorId = $authorId;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     */
    public function setPublisher($publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return mixed
     */
    public function getPublisherId()
    {
        return $this->publisherId;
    }

    /**
     * @param mixed $publisherId
     */
    public function setPublisherId($publisherId): void
    {
        $this->publisherId = $publisherId;
    }

    /**
     * @return mixed
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @param mixed $datePublished
     */
    public function setDatePublished($datePublished): void
    {
        $this->datePublished = $datePublished;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param mixed $dateCreated
     */
    public function setDateCreated($dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }


}
