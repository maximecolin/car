<?php

/*
 * This file is part of the Car package.
 *
 * (c) Maxime Colin <contact@maximecolin.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Car\Tests\Fixtures;

use Car\CommandInterface;
use Car\CommandHandlerInterface;

/**
 * Foobar command handler
 */
class FoobarCommandHandler implements CommandHandlerInterface
{
    public function handle(CommandInterface $command)
    {
    }
}
