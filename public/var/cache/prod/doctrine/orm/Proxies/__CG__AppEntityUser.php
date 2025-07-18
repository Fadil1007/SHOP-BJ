<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isVerified', '' . "\0" . 'App\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'orders', '' . "\0" . 'App\\Entity\\User' . "\0" . 'cartItems', '' . "\0" . 'App\\Entity\\User' . "\0" . 'reviews', '' . "\0" . 'App\\Entity\\User' . "\0" . 'phoneNumber', '' . "\0" . 'App\\Entity\\User' . "\0" . 'address', '' . "\0" . 'App\\Entity\\User' . "\0" . 'city', '' . "\0" . 'App\\Entity\\User' . "\0" . 'postalCode', '' . "\0" . 'App\\Entity\\User' . "\0" . 'country'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isVerified', '' . "\0" . 'App\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'orders', '' . "\0" . 'App\\Entity\\User' . "\0" . 'cartItems', '' . "\0" . 'App\\Entity\\User' . "\0" . 'reviews', '' . "\0" . 'App\\Entity\\User' . "\0" . 'phoneNumber', '' . "\0" . 'App\\Entity\\User' . "\0" . 'address', '' . "\0" . 'App\\Entity\\User' . "\0" . 'city', '' . "\0" . 'App\\Entity\\User' . "\0" . 'postalCode', '' . "\0" . 'App\\Entity\\User' . "\0" . 'country'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(string $username): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(?string $firstName): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(?string $lastName): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', []);

        return parent::getFullName();
    }

    /**
     * {@inheritDoc}
     */
    public function isIsVerified(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isIsVerified', []);

        return parent::isIsVerified();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsVerified(bool $isVerified): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsVerified', [$isVerified]);

        return parent::setIsVerified($isVerified);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrders(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrders', []);

        return parent::getOrders();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrder(\App\Entity\Order $order): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrder', [$order]);

        return parent::addOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrder(\App\Entity\Order $order): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrder', [$order]);

        return parent::removeOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getCartItems(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCartItems', []);

        return parent::getCartItems();
    }

    /**
     * {@inheritDoc}
     */
    public function addCartItem(\App\Entity\CartItem $cartItem): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCartItem', [$cartItem]);

        return parent::addCartItem($cartItem);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCartItem(\App\Entity\CartItem $cartItem): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCartItem', [$cartItem]);

        return parent::removeCartItem($cartItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getReviews(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReviews', []);

        return parent::getReviews();
    }

    /**
     * {@inheritDoc}
     */
    public function addReview(\App\Entity\Review $review): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReview', [$review]);

        return parent::addReview($review);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReview(\App\Entity\Review $review): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReview', [$review]);

        return parent::removeReview($review);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumber(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumber', []);

        return parent::getPhoneNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNumber(?string $phoneNumber): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNumber', [$phoneNumber]);

        return parent::setPhoneNumber($phoneNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress(?string $address): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(?string $city): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostalCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostalCode', []);

        return parent::getPostalCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostalCode(?string $postalCode): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostalCode', [$postalCode]);

        return parent::setPostalCode($postalCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(?string $country): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

}
