<?php

declare(strict_types=1);

namespace Potter\Event;

use \Potter\Event\Emitter\EmitterInterface;

final class Event extends AbstractEvent
{
    use EventTrait;
    
    public function __construct(string $id, EmitterInterface $emitter)
    {
        $this->setId($id);
    }
}