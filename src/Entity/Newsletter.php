<?php

namespace App\Entity;

use App\Repository\NewsletterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewsletterRepository::class)]
class Newsletter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'text')]
    private $content;

    #[ORM\Column(type: 'datetime_immutable')]
    private $created_at;

    #[ORM\Column(type: 'date', nullable: true)]
    private $datePlanif;

    #[ORM\Column(type: 'time', nullable: true)]
    private $heurePlanif;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getDatePlanif(): ?\DateTimeInterface
    {
        return $this->datePlanif;
    }

    public function setDatePlanif(?\DateTimeInterface $datePlanif): self
    {
        $this->datePlanif = $datePlanif;

        return $this;
    }

    public function getHeurePlanif(): ?\DateTimeInterface
    {
        return $this->heurePlanif;
    }

    public function setHeurePlanif(?\DateTimeInterface $heurePlanif): self
    {
        $this->heurePlanif = $heurePlanif;

        return $this;
    }
}
