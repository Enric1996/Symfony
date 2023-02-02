<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $isbn = null;

    #[ORM\Column(length: 30)]
    private ?string $title = null;

    #[ORM\Column(length: 30)]
    private ?string $author = null;

    #[ORM\Column]
    private ?int $pages = null;

    #[ORM\Column(length: 255)]
    private ?string $pubDate = null;

    #[ORM\Column]
    private ?int $publisher = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getPages(): ?int
    {
        return $this->pages;
    }

    public function setPages(int $pages): self
    {
        $this->pages = $pages;

        return $this;
    }

    public function getPubDate(): ?string
    {
        return $this->pubDate;
    }

    public function setPubDate(string $pubDate): self
    {
        $this->pubDate = $pubDate;

        return $this;
    }

    public function getPublisher(): ?int
    {
        return $this->publisher;
    }

    public function setPublisher(int $publisher): self
    {
        $this->publisher = $publisher;

        return $this;
    }
}
