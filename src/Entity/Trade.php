<?php

namespace App\Entity;

use App\Repository\TradeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TradeRepository::class)]
class Trade
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column]
    private ?int $agent_id = null;

    #[ORM\Column(length: 255)]
    private ?string $trade_size = null;

    #[ORM\Column]
    private ?int $lot_count = null;

    #[ORM\Column(length: 255)]
    private ?string $pnl = null;

    #[ORM\Column(length: 255)]
    private ?string $payout = null;

    #[ORM\Column(length: 255)]
    private ?string $user_margin = null;

    #[ORM\Column]
    private ?int $entry_rate = null;

    #[ORM\Column]
    private ?int $close_rate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_created = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_close = null;

    #[ORM\Column(length: 20)]
    private ?string $status = null;

    #[ORM\Column(length: 20)]
    private ?string $position = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getAgentId(): ?int
    {
        return $this->agent_id;
    }

    public function setAgentId(int $agent_id): static
    {
        $this->agent_id = $agent_id;

        return $this;
    }

    public function getTradeSize(): ?string
    {
        return $this->trade_size;
    }

    public function setTradeSize(string $trade_size): static
    {
        $this->trade_size = $trade_size;

        return $this;
    }

    public function getLotCount(): ?int
    {
        return $this->lot_count;
    }

    public function setLotCount(int $lot_count): static
    {
        $this->lot_count = $lot_count;

        return $this;
    }

    public function getPnl(): ?string
    {
        return $this->pnl;
    }

    public function setPnl(string $pnl): static
    {
        $this->pnl = $pnl;

        return $this;
    }

    public function getPayout(): ?string
    {
        return $this->payout;
    }

    public function setPayout(string $payout): static
    {
        $this->payout = $payout;

        return $this;
    }

    public function getUserMargin(): ?string
    {
        return $this->user_margin;
    }

    public function setUserMargin(string $user_margin): static
    {
        $this->user_margin = $user_margin;

        return $this;
    }

    public function getEntryRate(): ?string
    {
        return $this->entry_rate;
    }

    public function setEntryRate(string $entry_rate): static
    {
        $this->entry_rate = $entry_rate;

        return $this;
    }

    public function getCloseRate(): ?int
    {
        return $this->close_rate;
    }

    public function setCloseRate(int $close_rate): static
    {
        $this->close_rate = $close_rate;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->date_created;
    }

    public function setDateCreated(\DateTimeInterface $date_created): static
    {
        $this->date_created = $date_created;

        return $this;
    }

    public function getDateClose(): ?\DateTimeInterface
    {
        return $this->date_close;
    }

    public function setDateClose(\DateTimeInterface $date_close): static
    {
        $this->date_close = $date_close;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): static
    {
        $this->position = $position;

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
