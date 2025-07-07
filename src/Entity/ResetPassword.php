<?php

namespace App\Entity;

use App\Repository\ResetPasswordRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResetPasswordRepository::class)]
class ResetPassword
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    #[ORM\Column(length: 100)]
    private ?string $token = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $expires_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $used_at = null;

    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
        // Par défaut, le token expire dans 1 heure
        $this->expires_at = (new \DateTimeImmutable())->modify('+1 hour');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): static
    {
        $this->token = $token;

        return $this;
    }

    public function getExpiresAt(): ?\DateTimeImmutable
    {
        return $this->expires_at;
    }

    public function setExpiresAt(\DateTimeImmutable $expires_at): static
    {
        $this->expires_at = $expires_at;

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

    public function getUsedAt(): ?\DateTimeImmutable
    {
        return $this->used_at;
    }

    public function setUsedAt(?\DateTimeImmutable $used_at): static
    {
        $this->used_at = $used_at;

        return $this;
    }

    public function isValid(): bool
    {
        return !$this->isExpired() && !$this->isUsed();
    }

    public function isExpired(): bool
    {
        return $this->expires_at < new \DateTimeImmutable();
    }

    public function isUsed(): bool
    {
        return $this->used_at !== null;
    }

    public function markAsUsed(): static
    {
        $this->used_at = new \DateTimeImmutable();
        return $this;
    }
}