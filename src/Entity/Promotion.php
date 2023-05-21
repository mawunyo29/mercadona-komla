<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionRepository::class)]
class Promotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $promotion_started_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $promotion_end_at = null;

    #[ORM\Column(length: 50)]
    private ?string $rate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPromotionStartedAt(): ?\DateTimeImmutable
    {
        return $this->promotion_started_at;
    }

    public function setPromotionStartedAt(\DateTimeImmutable $promotion_started_at): self
    {
        $this->promotion_started_at = $promotion_started_at;

        return $this;
    }

    public function getPromotionEndAt(): ?\DateTimeImmutable
    {
        return $this->promotion_end_at;
    }

    public function setPromotionEndAt(\DateTimeImmutable $promotion_end_at): self
    {
        $this->promotion_end_at = $promotion_end_at;

        return $this;
    }

    public function getRate(): ?string
    {
        return $this->rate;
    }

    public function setRate(string $rate): self
    {
        $this->rate = $rate;

        return $this;
    }
}
