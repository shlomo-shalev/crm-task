<?php

namespace App\Entity;

use App\Repository\AssetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssetRepository::class)]
class Asset
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $bid = null;

    #[ORM\Column(length: 255)]
    private ?string $ask = null;

    #[ORM\Column(length: 255)]
    private ?string $lot_size = null;

    #[ORM\Column(options: ["default" => "CURRENT_TIMESTAMP", "on_update", 'columnDefinition' =>"DATETIME on update CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $date_update = null;

    #[ORM\Column(options: ["default" => "CURRENT_TIMESTAMP", "on_update"])]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(options: ["default" => "CURRENT_TIMESTAMP", "on_update", 'columnDefinition' =>"DATETIME on update CURRENT_TIMESTAMP"])]
    private ?\DateTimeImmutable $updated_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBid(): ?string
    {
        return $this->bid;
    }

    public function setBid(string $bid): static
    {
        $this->bid = $bid;

        return $this;
    }

    public function getAsk(): ?string
    {
        return $this->ask;
    }

    public function setAsk(string $ask): static
    {
        $this->ask = $ask;

        return $this;
    }

    public function getLotSize(): ?string
    {
        return $this->lot_size;
    }

    public function setLotSize(string $lot_size): static
    {
        $this->lot_size = $lot_size;

        return $this;
    }

    public function getDateUpdate(): ?\DateTimeInterface
    {
        return $this->date_update;
    }

    public function setDateUpdate(\DateTimeInterface $date_update): static
    {
        $this->date_update = $date_update;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
