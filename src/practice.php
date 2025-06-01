<?php
// Value Objects
class Price implements \JsonSerializable
{
    public function __construct(protected float $amount)
    {
        if ($this->amount <= 0) {
            throw new \InvalidArgumentException('A price must be offered for this item');
        }
        if ($this->amount > 100000) {
            throw new \InvalidArgumentException('That amount of money is too high');
        }
    }

    public function __toString(): string
    {
        return number_format($this->amount, 2);
    }

    public function jsonSerialize(): mixed
    {
        return ['amount' => $this->amount];
    }
}

class Id implements \JsonSerializable
{
    public function __construct(protected string $IdHash) {}

    public function jsonSerialize(): mixed
    {
        return ['id' => $this->IdHash];
    }
}

class Order implements \JsonSerializable
{
    public function __construct(
        protected Id $id,
        protected Price $price,
        protected string $sku,
    ) {}

    public function setPrice(Price $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function printOrder()
    {
        var_dump($this);
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'price' => $this->price,
            'sku' => $this->sku,
        ];
    }
}

class OrderHistory
{
    public function all(): array
    {
        return [
            new Order(new Id('#12211'), new Price(1212), 'Mint Sunglasses'),
            new Order(new Id('#12212'), new Price(20), 'Shady'),
        ];
    }
}

$new = (new OrderHistory)->all();
$data = json_encode($new, JSON_PRETTY_PRINT);
var_dump($data);
