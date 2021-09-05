<?php

namespace App\Listener;

use App\Event\PreCreateEvent;
use App\Entity\User;

/**
 * Class SecurityListener
 * @package App\Listener
 */
class UserListener
{
    /**
     * @param PreCreateEvent $event
     */
    public function __invoke(PreCreateEvent $event): void
    {
        $object = $event->getObject();

        if ($object instanceof User) {
            echo __CLASS__ . 'event recieved';
        }
    }
}
