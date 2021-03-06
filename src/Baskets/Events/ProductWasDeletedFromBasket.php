<?php namespace Acme\Baskets\Events;

use Acme\Baskets\VO\BasketId;
use Acme\Baskets\VO\ProductId;
use Acme\EventSourcing\Events\DomainEvent;

final class ProductWasDeletedFromBasket implements DomainEvent
{
    /** @var \Acme\Baskets\VO\BasketId */
    private $basketId;

    /** @var \Acme\Baskets\VO\ProductId */
    private $productId;

    public function __construct(BasketId $basketId, ProductId $productId)
    {
        $this->basketId = $basketId;
        $this->productId = $productId;
    }

    public function getAggregateId()
    {
        return $this->basketId;
    }

    public function getBasketId()
    {
        return $this->basketId;
    }

    public function getProductId()
    {
        return $this->productId;
    }
}
