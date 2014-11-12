<?php

/*
 * This file is part of the Wheels package.
 *
 * (c) Maxime Colin <contact@maximecolin.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Wheels\Resolver;

use Wheels\CommandInterface;

/**
 * Get handler for a command
 */
interface ResolverInterface
{
    /**
     * Get handler
     *
     * @param \Wheels\CommandInterface $command
     * @return \Wheels\CommandHandlerInterface
     */
    public function getHandler(CommandInterface $command);
}
