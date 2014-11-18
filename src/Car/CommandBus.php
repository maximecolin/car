<?php

/*
 * This file is part of the Car package.
 *
 * (c) Maxime Colin <contact@maximecolin.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Car;

use Car\Resolver\ResolverInterface;
use Car\Exception\NoHandlerFoundException;

/**
 * Command bus
 */
class CommandBus
{
    /**
     * @var \SplPriorityQueue Resolvers queue
     */
    private $resolvers;

    public function __construct()
    {
        $this->resolvers = new \SplPriorityQueue();
    }

    /**
     * Execute a command
     *
     * @param \Car\CommandInterface $command
     * @return type
     */
    public function execute(CommandInterface $command)
    {
        return $this->getHandler($command)->handle($command);
    }

    /**
     * Get the handler matching a command
     *
     * @param \Car\CommandInterface $command
     * @return \Car\CommandHandlerInterface
     * @throws NoHandlerFoundException
     */
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

    /**
     * Add a handler resolver
     *
     * @param \Car\Resolver\ResolverInterface $resolver
     * @param type $priority
     */
    public function addResolver(ResolverInterface $resolver, $priority = 0)
    {
        $this->resolvers->insert($resolver, $priority);
    }
}
