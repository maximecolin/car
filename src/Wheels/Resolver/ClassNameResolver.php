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
 * Resolve handler class name from the command class name
 */
class ClassNameResolver implements ResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function getHandler(CommandInterface $command)
    {
        $class = sprintf('%sHandler', get_class($command));

        return class_exists($class) ? new $class() : null;
    }
}
