<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $firstname;

    #[ORM\Column(type: 'string', length: 32)]
    private $credential;

    #[ORM\Column(type: 'boolean')]
    private $assigned;

    #[ORM\Column(type: 'date')]
    private $first_visit;

    #[ORM\Column(type: 'date')]
    private $last_visit;

    #[ORM\ManyToOne(targetEntity: Figure::class, inversedBy: 'users')]
    #[ORM\JoinColumn(nullable: false)]
    private $figure;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getCredential(): ?string
    {
        return $this->credential;
    }

    public function setCredential(string $credential): self
    {
        $this->credential = $credential;

        return $this;
    }

    public function getAssigned(): ?bool
    {
        return $this->assigned;
    }

    public function setAssigned(bool $assigned): self
    {
        $this->assigned = $assigned;

        return $this;
    }

    public function getFirstVisit(): ?\DateTimeInterface
    {
        return $this->first_visit;
    }

    public function setFirstVisit(\DateTimeInterface $first_visit): self
    {
        $this->first_visit = $first_visit;

        return $this;
    }

    public function getLastVisit(): ?\DateTimeInterface
    {
        return $this->last_visit;
    }

    public function setLastVisit(\DateTimeInterface $last_visit): self
    {
        $this->last_visit = $last_visit;

        return $this;
    }

    public function getFigure(): ?Figure
    {
        return $this->figure;
    }

    public function setFigure(?Figure $figure): self
    {
        $this->figure = $figure;

        return $this;
    }
}
