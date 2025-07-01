<?php

declare(strict_types=1);

namespace Potter\EventDispatcher;

abstract class AbstractEventDispatcher
    extends \Symfony\Component\EventDispatcher\EventDispatcher
    implements EventDispatcherInterface
{ }
