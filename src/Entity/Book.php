<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $titre = null;

    #[ORM\Column(length: 100)]
    private ?string $auteur = null;

    #[ORM\Column(length: 100)]
    private ?string $editeur = null;

    #[ORM\Column(length: 100)]
    private ?string $genre = null;

    #[ORM\Column(nullable: true)]
    private ?int $disponibite = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $imgurl = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $imgauthor = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function setEditeur(string $editeur): static
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): static
    {
        $this->genre = $genre;

        return $this;
    }

    public function getDisponibite(): ?int
    {
        return $this->disponibite;
    }

    public function setDisponibite(?int $disponibite): static
    {
        $this->disponibite = $disponibite;

        return $this;
    }

    public function getImgurl(): ?string
    {
        return $this->imgurl;
    }

    public function setImgurl(?string $imgurl): static
    {
        $this->imgurl = $imgurl;

        return $this;
    }

    public function getImgauthor(): ?string
    {
        return $this->imgauthor;
    }

    public function setImgauthor(?string $imgauthor): static
    {
        $this->imgauthor = $imgauthor;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
