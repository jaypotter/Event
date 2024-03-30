<?php

declare(strict_types=1);

namespace Potter\Event;

final class Event extends AbstractEvent
{
    use EventTrait;
    
    public function __construct(string $id)
    {
        $this->setId($id);
    }
}