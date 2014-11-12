<?php

/*
 * This file is part of the Wheels package.
 *
 * (c) Maxime Colin <contact@maximecolin.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Wheels\Tests\Fixtures;

use Wheels\CommandInterface;
use Wheels\CommandHandlerInterface;

/**
 * Foobar command handler
 */
class FoobarCommandHandler implements CommandHandlerInterface
{
    public function handle(CommandInterface $command)
    {
    }
}
