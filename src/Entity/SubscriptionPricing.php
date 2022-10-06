<?php

declare(strict_types=1);

namespace PlugAndPay\Sdk\Entity;

use BadFunctionCallException;

class SubscriptionPricing
{
    private float $amount;
    private float $amountWithTax;
    /** @var Discount[] */
    private array $discounts;
    private int $quantity;
    private Tax $tax;
    private bool $isTaxIncluded;

    public function amount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function amountWithTax(): float
    {
        return $this->amountWithTax;
    }

    public function setAmountWithTax(float $amountWithTax): self
    {
        $this->amountWithTax = $amountWithTax;
        return $this;
    }

    public function discounts(): array
    {
        return $this->discounts;
    }

    public function setDiscounts(array $discounts): self
    {
        $this->discounts = $discounts;
        return $this;
    }

    public function quantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function tax(): Tax
    {
        return $this->tax;
    }

    public function setTax(Tax $tax): self
    {
        $this->tax = $tax;
        return $this;
    }

    public function isTaxIncluded(): bool
    {
        return $this->isTaxIncluded;
    }

    public function setIsTaxIncluded(bool $isTaxIncluded): self
    {
        $this->isTaxIncluded = $isTaxIncluded;
        return $this;
    }

    public function isset(string $field): bool
    {
        if (!property_exists($this, $field)) {
            throw new BadFunctionCallException("Method '$field' does not exists");
        }

        return isset($this->{$field});
    }
}
