<?php

/*
 * This file is part of the Car package.
 *
 * (c) Maxime Colin <contact@maximecolin.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Car\Resolver;

use Car\CommandInterface;

/**
 * Get handler for a command
 */
interface ResolverInterface
{
    /**
     * Get handler
     *
     * @param \Car\CommandInterface $command
     * @return \Car\CommandHandlerInterface
     */
    public function getHandler(CommandInterface $command);
}
