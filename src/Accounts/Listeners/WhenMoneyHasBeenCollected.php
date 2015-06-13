<?php namespace KBC\Accounts\Listeners;

use KBC\EventSourcing\Events\DomainEvent;
use KBC\EventSourcing\Events\Listener;

final class WhenMoneyHasBeenCollected implements Listener
{
    public function handle(DomainEvent $event)
    {
        var_dump("€{$event->getBalance()->getAmount()} has been withdrawn.");
    }
}
