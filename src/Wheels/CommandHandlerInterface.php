<?php

/*
 * This file is part of the Wheels package.
 *
 * (c) Maxime Colin <contact@maximecolin.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Wheels;

/**
 * Command handler interface
 */
interface CommandHandlerInterface
{
    /**
     * Handle a command
     *
     * @param \Wheels\CommandInterface $command
     */
    public function handle(CommandInterface $command);
}
