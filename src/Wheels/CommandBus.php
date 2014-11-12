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

use Wheels\Resolver\ResolverInterface;
use Wheels\Exception\NoHandlerFoundException;

class CommandBus
{
    private $resolvers;

    public function __construct()
    {
        $this->resolvers = new \SplPriorityQueue();
    }

    public function execute(CommandInterface $command)
    {
        return $this->getHandler($command)->handle($command);
    }

    private function getHandler(CommandInterface $command)
    {
        foreach ($this->resolvers as $resolver) {
            $handler = $resolver->getHandler($command);

            if ($handler) {
                return $handler;
            }
        }

        throw new NoHandlerFoundException('No handler found');
    }

    public function addResolver(ResolverInterface $resolver, $priority = 0)
    {
        $this->resolvers->insert($resolver, $priority);
    }
}
