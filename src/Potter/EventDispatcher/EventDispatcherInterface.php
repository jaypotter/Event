<?php

declare(strict_types=1);

namespace Potter\EventDispatcher;

interface EventDispatcherInterface
    extends \League\Event\EventDispatchingListenerRegistry,
            \Psr\EventDispatcher\EventDispatcherInterface
{ }
