<?php


namespace App\Event;

use App\Listener\Event;

/**
 * Class PreCreateEvent
 * @package App\Event
 */
class PreCreateEvent extends Event
{

    /**
     * @var object
     */
    private $object;

    /**
     * PreCreateEvent constructor.
     * @param object $object
     */
    public function __construct(object $object)
    {
        $this->object = $object;
    }

    /**
     * @return object
     */
    public function getObject(): object
    {
        return $this->object;
    }
}
