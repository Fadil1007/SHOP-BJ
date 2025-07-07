<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sku = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $shortDescription = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?float $price = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\GreaterThanOrEqual(0)]
    private ?int $stock = 0;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageFilename = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageFilename2 = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageFilename3 = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageFilename4 = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName4 = null;

    #[ORM\Column]
    private ?array $sizes = [];

    #[ORM\Column]
    private ?array $colors = [];

    #[ORM\Column]
    private ?bool $featured = false;
    
    #[ORM\Column]
    private ?bool $isActive = true;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: OrderItem::class)]
    private Collection $orderItems;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: CartItem::class, orphanRemoval: true)]
    private Collection $cartItems;
    
    #[ORM\OneToMany(mappedBy: 'product', targetEntity: Review::class, orphanRemoval: true)]
    private Collection $reviews;
    
    #[ORM\Column(nullable: true)]
    private ?float $oldPrice = null;
    
    #[ORM\Column]
    private ?bool $onSale = false;
    
    #[ORM\Column(nullable: true)]
    private ?int $discountPercentage = null;

    public function __construct()
    {
        $this->orderItems = new ArrayCollection();
        $this->cartItems = new ArrayCollection();
        $this->reviews = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
        $this->sizes = [];
        $this->colors = [];
    }

    public function __toString(): string
    {
        return $this->name ?? 'New Product';
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): static
    {
        $this->sku = $sku;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): static
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function getImageFilename(): ?string
    {
        return $this->imageFilename;
    }

    public function setImageFilename(?string $imageFilename): static
    {
        $this->imageFilename = $imageFilename;

        return $this;
    }
    
    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): static
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getImageFilename2(): ?string
    {
        return $this->imageFilename2;
    }

    public function setImageFilename2(?string $imageFilename2): static
    {
        $this->imageFilename2 = $imageFilename2;

        return $this;
    }
    
    public function getImageName2(): ?string
    {
        return $this->imageName2;
    }

    public function setImageName2(?string $imageName2): static
    {
        $this->imageName2 = $imageName2;

        return $this;
    }

    public function getImageFilename3(): ?string
    {
        return $this->imageFilename3;
    }

    public function setImageFilename3(?string $imageFilename3): static
    {
        $this->imageFilename3 = $imageFilename3;

        return $this;
    }
    
    public function getImageName3(): ?string
    {
        return $this->imageName3;
    }

    public function setImageName3(?string $imageName3): static
    {
        $this->imageName3 = $imageName3;

        return $this;
    }

    public function getImageFilename4(): ?string
    {
        return $this->imageFilename4;
    }

    public function setImageFilename4(?string $imageFilename4): static
    {
        $this->imageFilename4 = $imageFilename4;

        return $this;
    }
    
    public function getImageName4(): ?string
    {
        return $this->imageName4;
    }

    public function setImageName4(?string $imageName4): static
    {
        $this->imageName4 = $imageName4;

        return $this;
    }

    public function getSizes(): ?array
    {
        return $this->sizes;
    }

    public function setSizes(array $sizes): static
    {
        $this->sizes = $sizes;

        return $this;
    }

    public function getColors(): ?array
    {
        return $this->colors;
    }

    public function setColors(array $colors): static
    {
        $this->colors = $colors;

        return $this;
    }

    public function isFeatured(): ?bool
    {
        return $this->featured;
    }

    public function setFeatured(bool $featured): static
    {
        $this->featured = $featured;

        return $this;
    }
    
    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }
    
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection<int, OrderItem>
     */
    public function getOrderItems(): Collection
    {
        return $this->orderItems;
    }

    public function addOrderItem(OrderItem $orderItem): static
    {
        if (!$this->orderItems->contains($orderItem)) {
            $this->orderItems->add($orderItem);
            $orderItem->setProduct($this);
        }

        return $this;
    }

    public function removeOrderItem(OrderItem $orderItem): static
    {
        if ($this->orderItems->removeElement($orderItem)) {
            // set the owning side to null (unless already changed)
            if ($orderItem->getProduct() === $this) {
                $orderItem->setProduct(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CartItem>
     */
    public function getCartItems(): Collection
    {
        return $this->cartItems;
    }

    public function addCartItem(CartItem $cartItem): static
    {
        if (!$this->cartItems->contains($cartItem)) {
            $this->cartItems->add($cartItem);
            $cartItem->setProduct($this);
        }

        return $this;
    }

    public function removeCartItem(CartItem $cartItem): static
    {
        if ($this->cartItems->removeElement($cartItem)) {
            // set the owning side to null (unless already changed)
            if ($cartItem->getProduct() === $this) {
                $cartItem->setProduct(null);
            }
        }

        return $this;
    }
    
    /**
     * @return Collection<int, Review>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): static
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews->add($review);
            $review->setProduct($this);
        }

        return $this;
    }

    public function removeReview(Review $review): static
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getProduct() === $this) {
                $review->setProduct(null);
            }
        }

        return $this;
    }
    
    public function getOldPrice(): ?float
    {
        return $this->oldPrice;
    }

    public function setOldPrice(?float $oldPrice): static
    {
        $this->oldPrice = $oldPrice;

        return $this;
    }

    public function isOnSale(): ?bool
    {
        return $this->onSale;
    }

    public function setOnSale(bool $onSale): static
    {
        $this->onSale = $onSale;

        return $this;
    }

    public function getDiscountPercentage(): ?int
    {
        return $this->discountPercentage;
    }

    public function setDiscountPercentage(?int $discountPercentage): static
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }
    
    /**
     * Calculate the discount percentage based on original and current price
     */
    public function calculateDiscountPercentage(): void
    {
        if ($this->oldPrice && $this->price && $this->oldPrice > $this->price) {
            $discount = (($this->oldPrice - $this->price) / $this->oldPrice) * 100;
            $this->discountPercentage = (int)round($discount);
            $this->onSale = true;
        } else {
            $this->discountPercentage = null;
            $this->onSale = false;
        }
    }
}
