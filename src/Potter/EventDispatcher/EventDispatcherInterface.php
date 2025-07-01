<?php

declare(strict_types=1);

namespace Potter\EventDispatcher;

interface EventDispatcherInterface
    extends \Psr\EventDispatcher\EventDispatcherInterface,
            \Symfony\Component\EventDispatcher\EventDispatcherInterface
{ }
