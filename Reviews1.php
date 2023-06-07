<?php

namespace App\Entity;

use App\Repository\Reviews1Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Reviews1Repository::class)]
class Reviews1
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $book_id = null;

    #[ORM\Column(length: 255)]
    private ?string $reviewr_name = null;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\Column]
    private ?int $rating = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $published_data = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookId(): ?int
    {
        return $this->book_id;
    }

    public function setBookId(int $book_id): self
    {
        $this->book_id = $book_id;

        return $this;
    }

    public function getReviewrName(): ?string
    {
        return $this->reviewr_name;
    }

    public function setReviewrName(string $reviewr_name): self
    {
        $this->reviewr_name = $reviewr_name;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getPublishedData(): ?\DateTimeInterface
    {
        return $this->published_data;
    }

    public function setPublishedData(\DateTimeInterface $published_data): self
    {
        $this->published_data = $published_data;

        return $this;
    }
}
